<?php

include_once '../../../common/databaseConnection.php';

class backendDataManage{

  var $data='';

  function __construct($data){
    $this->data=$data;
  }

  private function redirect(){
    $redirect=$_SERVER['HTTP_REFERER'];
    header('Location:'.$redirect);
  }

  public function addOffice($table){

    $sql='INSERT INTO `'.$table.'` VALUES ("",
    "'.$this->data['systemeintrag'].'",
    "'.$this->data['eintragName'].'",
.
.
.

    "'.$this->data['beschreibung'].'",
    "'.$this->data['arbeitsschwerpunkte'].'",
    "'.$this->data['schulerlabo'].'",
    "'.$this->data['schulzeit'].'"
    )';

    $db= new askDatabase();
    $db->modifyDataInDatabase($sql);
    $this->redirect();

  }

  public function addPerson($table){

    $sql='INSERT INTO `'.$table.'` VALUES ("",
    "'.$this->data['systemeintrag'].'",
    "'.$this->data['eintragName'].'",
 .
 .
 .
 .

    "'.$this->data['thematischeSchwerpunkte'].'",
    "'.$this->data['zielsetzung'].'"
    )';

    echo $this->data['beschreibung'];

    $db= new askDatabase();
    $db->modifyDataInDatabase($sql);

    $this->redirect();

  }

  public function addSelect($table,$column,$id){
    $db= new askDatabase();

    #get selects from table
    $sql="SELECT `$column` FROM `$table` WHERE `id`=1";
    $fetched=$db->getDataFromDatabase($sql);
    $values=$fetched[0][0][0];
    $column=$fetched[1][0];

    #and just add one more on end
    $newValues=$values.'|'.$_POST['new-option'];

    #now update table
    $sql="UPDATE `$table` SET `$column`='$newValues' WHERE `id`=1;";
    $db->modifyDataInDatabase($sql);
    $this->redirect();
  }

}

?>
