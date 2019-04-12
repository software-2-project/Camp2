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

class halls extends reservation{
		
        public function get_hallavailable()
        {
            $q = "SELECT * FROM `halls`";
            $val= mysqli_query($GLOBALS['conn'],$q);
            return $val;
        }

        public function reserve_halls($id_user , $id_hall)
        {
            $q = "INSERT INTO `reservation`(`user_id`, `halls_id`) VALUES ($id_user , $id_hall)";
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

class parties extends reservation{

        public function get_partyavailable()
        {
            $q   = "SELECT * FROM `parties` ";
            $val = mysqli_query($GLOBALS['conn'],$q);
            return $val;
        }
        public function reserve_parties($id_user,$id_party)
        {
            $q = "INSERT INTO `reservation`(`user_id`, `parties_id`) VALUES ($id_user , $id_party)";
            mysqli_query($GLOBALS['conn'],$q);
        }
} 