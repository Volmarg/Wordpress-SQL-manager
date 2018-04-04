<?php
include_once '../wp-content/plugins/sql-entries/common/databaseConnection.php';

class selectParser{

  public function getData($column,$table){
    $db= new askDatabase();
    $sql="SELECT $column FROM `$table`";
    $fetched=$db->getDataFromDatabase($sql);
    $values=array();
    $options=array();

    #for sselect all so it can iterate over each rows
	.
	.
	.
    return $options;
  }

  private function split($data,$type){

    $arrayOfOptions=array();

	.
	.
	.

    return $arrayOfOptions;
  }

}


?>
