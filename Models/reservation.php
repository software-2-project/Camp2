<?php 
include 'connection.php';
class reservation{
    public $kind;
    public $available;
    public $price;
}

class competition extends reservation{

    public function get_comptetion(){
        $q = "SELECT * FROM  `competitions`";
        $val= mysqli_query($GLOBALS['conn'],$q);
		  return $val;
    }
    public function reserve_competition($id_user , $id_com)
		{
			$q = "INSERT INTO `reservation`(`user_id`, `competition_id`) VALUES ($id_user , $id_com)";
			mysqli_query($GLOBALS['conn'] , $q);
		}
}


class trips extends reservation{

        public function get_tripsavailable()
        {
            $q = "SELECT * FROM `trips`";
            $val= mysqli_query($GLOBALS['conn'],$q);
            return $val;
        }

        public function reserve_trips($id_user,$id_trip)
        {
            $q = "INSERT INTO `reservation`(`user_id`, `trips_id`) VALUES ($id_user , $id_trip)";
            mysqli_query($GLOBALS['conn'],$q);
    }
}


