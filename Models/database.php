<?php
class DB_manager{
	private $query;
	private $hostName;
	private $username;
	private $password;
	private $dbName;
	private $conn;
	private static $check_inst;

	// << Constructor to intialize and connect to database >>

	private function __construct(){
            $this->hostName = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbName = "club";
            $this->conn = mysqli_connect($this->hostName,$this->username,$this->password,$this->dbName) or die('Connection failed');
            mysqli_set_charset($this->conn,"utf8");
	}
        
        // << To check if instance of DB_manager if exists will return the same instance to reuse else it will create new one >>

	public static function getInstance(){
            if (self::$check_inst == NULL) {
                self::$check_inst = new DB_manager();
            }
            return self::$check_inst;
	}
        
	// << To excute and get data from a query >>

	private function Execute_get_SelectQuery_data(){
            $result = mysqli_query($this->conn,$this->query);
            $arr = array();
            if ($result) {
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        array_push($arr, $row);
                    }
                    return $arr;
                } else {
                    return false;
                }
            } else {
                return false;
            }
    }

	// << To select all data in specific table with condition >>

	public function select_all($tableName){
		$this->query = "select * from `". $tableName ;
		return $this->Execute_get_SelectQuery_data();
	}
	public function select_all_cond($tableName , $condition){
		$this->query = "select * from `". $tableName . "` where " . $condition;
		return $this->Execute_get_SelectQuery_data();
	}

	// << To select specific data in a specific table with condition >>

	public function select_specific($tableName,$arr_cols,$condition){
		$arr_size = count($arr_cols);
		$this->query = "select ";
		for($i=0;$i<$arr_size;$i++){
			$this->query .= "`" . $arr_cols[$i] . "`";
			if ($i < $arr_size - 1) {
                $this->query .= ",";
            }
        }
		$this->query .= " from `" . $tableName . "` where ". $condition;
		return $this->Execute_get_SelectQuery_data();
	}

	// << To select join specific data in a specific table with condition >>

	public function select_Join($tableNameLeft,$tableNameRight,$arr_cols,$join_type,$join_condition,$condition){
		$arr_size = count($arr_cols);
		$this->query = "select ";
		for($i=0;$i<$arr_size;$i++){
			$this->query .= "`" . $arr_cols[$i] . "`";
			if ($i < $arr_size - 1) {
                $this->query .= ",";
            }
        }
		$this->query .= " from `" . $tableNameLeft . "` " . $join_type . " join `" . $tableNameRight . "` ON " . $join_condition . " where " . $condition;
                return $this->Execute_get_SelectQuery_data();
	}

	// << To select aggregate function >>

	public function aggregateFun($tableName,$colName,$funType,$condition){
		$squery = "select " . $funType . "(`" . $colName . "`) as res from `" . $tableName . "` where " . $condition;
		$result = mysqli_query($this->conn,$squery);
		$row = mysqli_fetch_assoc($result);
		$MaxID = $row['res'];
		return $MaxID;
	}

	// << To insert data into a specific table >>

	public function insert($tableName,$arr_cols,$arr_values){
		$arr_cols_size = count($arr_cols);
		$arr_values_size = count($arr_values);
		$this->query = "insert into `" . $tableName . "` (";
		for($i=0;$i<$arr_cols_size;$i++){
			$this->query .= "`" . $arr_cols[$i] . "`";
			if ($i < $arr_cols_size - 1) {
                $this->query .= ",";
            }
        }
		$this->query .= ") values (";
		for($i=0;$i<$arr_values_size;$i++){
			$this->query .= "'" . $arr_values[$i] . "'";
			if ($i < $arr_values_size - 1) {
                $this->query .= ",";
            }
        }
		$this->query .= ")";
		$result = mysqli_query($this->conn,$this->query);
		if ($result) {
            return true;
        } else {
            return false;
        }
    }

	// << To update data in a specific table >>

	public function update($tableName,$arr_cols,$arr_values,$condition){
		$arr_cols_size = count($arr_cols);
		$this->query = "update `" . $tableName . "` set ";
		 for($i=0;$i<$arr_cols_size;$i++){
			$this->query .= "`" . $arr_cols[$i] . "`='" . $arr_values[$i] . "'";
			if ($i < $arr_cols_size - 1) {
                $this->query .= ",";
            }
        }
		$this->query .= " where " . $condition;
		$result = mysqli_query($this->conn,$this->query);
		if ($result) {
            return true;
        } else {
            return false;
        }
    }

	// << To delete data from a specific table >>

	public function delete($tableName,$primaryKey_colName,$condition){
		$this->query = "delete from `" . $tableName . "` where " . $condition;
		$result = mysqli_query($this->conn,$this->query);
		if ($result) {
            // << fix auto increment value >>
            $MaxID = $this->aggregateFun($tableName, $primaryKey_colName, 'max', $condition);
            $qur = "ALTER TABLE `" . $tableName . "` AUTO_INCREMENT=" . ($MaxID + 1);
            mysqli_query($this->conn, $qur);
            return true;
        } else {
            return false;
        }
    }
}

/* << select_all tutorial >>

$db = DB_manager::getInstance();
$result_arr1 = $db->select_all("badge","`B_ID`=1 OR `B_ID`=2"); // select based on specific condition
$result_arr2 = $db->select_all("badge",1); // select all (the same as no condition)
if($result_arr1){
	foreach ($result_arr1 as $key => $value){
		echo "Badge Name: " . $value['B_Name'] . "<br/>Badge ID: " . $value['B_ID'] . "<br/><br/>";
	}
}

*/

/* << select_specific tutorial >>

$db = DB_manager::getInstance();
$arr = array("U_ID","U_Gender","U_country","U_Name"); // columns to display
$result_arr1 = $db->select_specific("registered users",$arr,1);// select all
$result_arr2 = $db->select_specific("registered users",$arr,"`U_Gender` = 'male'");// select based on specific condition

if($result_arr1){
	foreach ($result_arr1 as $key => $value){
		echo "User ID: " . $value['U_ID'] . "<br/>User Gender: " . $value['U_Gender'] . "<br/>" . "User Country: " . $value['U_country'] . "<br/>" . "User Name: " . $value['U_Name'] . "<br/><br/>";
	}
}

*/

/* << select_Join tutorial >>

$db = DB_manager::getInstance();
$arr = array("U_Name","U_Gender","U_country","U_ID","B_Name");
$result_arr1 = $db->select_Join('registered users','badge',$arr,'inner',"`registered users`.`Bage_ID` = `badge`.`B_ID`" , 1); // select join with condition = 1 to get all data (the same as no condition)
$result_arr2 = $db->select_Join('registered users','badge',$arr,'left',"`registered users`.`Bage_ID` = `badge`.`B_ID`" , "`Bage_ID` = 1"); // select join with specific condition

if($result_arr1){
	foreach ($result_arr1 as $key => $value){
		echo "User Name: " . $value['U_Name'] . "<br/>User Gender: " . $value['U_Gender'] . "<br/>" . "User Country: " . $value['U_country'] . "<br/>" . "User ID: " . $value['U_ID'] . "<br/>" . "User Badge: " . $value['B_Name'] . "<br/><br/>";
	}
}

*/

/* << insert tutorial >>

$db = DB_manager::getInstance();
$arr1 = array("U_ID","U_personal-rate","U_Gender","U_Age","U_country","U_Mail","U_UserName","U_Password","U_Name"); // array of columns
$arr2 = array(0,2500,'male',30,'USA','daniel56@gmail.com','danio','dan587','Daniel morris'); // array of values , 0 for auto increment id to continue from last value
$result_arr1 = $db->insert('registered users',$arr1,$arr2);

if($result_arr1)
	echo "inserted successfully";
else
	echo "failed to insert";

*/

/* << update tutorial >>

$db = DB_manager::getInstance();
$arr1 = array("U_personal-rate","U_Age","U_country");
$arr2 = array(3000,40,'USA');
$result_arr1 = $db->update('registered users',$arr1,$arr2,'U_ID = 7');

if($result_arr1)
	echo "updated successfully";
else
	echo "failed to updated";

*/

/* << delete tutorial >>

$db = DB_manager::getInstance();
$result_arr1 = $db->delete('registered users','U_ID','U_ID = 2');

if($result_arr1)
	echo "deleted successfully";
else
	echo "failed to delete";

*/

/* << select_aggregateFun tutorial >>

$db = DB_manager::getInstance();
$result_arr1 = $db->aggregateFun('registered users','U_personal-rate','max','1');

echo $result_arr1;

*/