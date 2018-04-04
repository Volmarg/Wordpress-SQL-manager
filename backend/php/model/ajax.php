<?php

include_once '../../../common/databaseConnection.php';

class entriesEdit{

  public function save($sql,$table){
    $db= new askDatabase();
    $db->modifyDataInDatabase($sql);
  }

  public function remove($table){

  }

  public function removeSelect($sql){
    .
	.
	.
  }

}


?>
