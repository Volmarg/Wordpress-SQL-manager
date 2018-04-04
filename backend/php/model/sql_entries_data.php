<?php

include_once '../wp-content/plugins/sql-entries/common/databaseConnection.php';
include_once 'translate.php';
include_once 'select_parser.php';

class getSQLEntriesdata{

  var $lang='';
  var $db='';
  var $parser='';
  var $inpute='';

  function __construct(){
    $this->lang=new translator();
    $this->db=new askDatabase();
    $this->parser=new selectParser();
    $this->input=new inputTypes();

  }

  function getEntriesData($table,$name){

    $sql="SELECT * FROM `$table`";
    $fetched=$this->db->getDataFromDatabase($sql);
    $entries=$fetched[0];
    $tableNames=$fetched[1];

    $this->printEntriesData($entries,$name,$tableNames);

  }

  private function printEntriesData($entries,$name,$tableNames){

    #print view of table with user inputs/entries
    echo '<table class="table table-striped" id="'.$name.'">';
	.
	.
	.
	
      echo '<tbody>';
    echo '</table>';
  }

  private function isSelect($name,$table){

    if($name!='id'){

    #get all columNames in correspoing table that is currently edited
    $sql="SELECT `$name` FROM `$table`";

    $fetched=$this->db->getDataFromDatabase($sql);
    $tableNames=$fetched[1][0];
    $returnable=false;

    if($tableNames==$name){
          $returnable=true;
        }else {
          $returnable=false;
        }
      }

      return $returnable;
    }

  private function createSelect($column,$table){
    $options=$this->parser->getData($column,$table); #get data
    $this->input->select('multiselect', $column, $column, '',$options); #build select

  }

}

?>
