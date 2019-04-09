<?php

include "connection.php";

class Talent {

	public $title;
	public $discription ;

    public function Set_request_result ($tal_kind){

	$qyery = " SELECT `tal_id` FROM `talents` WHERE discription = $tal_kind ";
        $val = mysqli_query($GLOBALS['conn'], $query);

    } 
}  