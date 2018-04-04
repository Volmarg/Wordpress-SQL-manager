<?php

include_once 'inputs_types_entries.php';
include_once '../wp-content/plugins/sql-entries/backend/php/model/select_parser.php';

class officePartials{

  public static function schulerlabo(){

    officePartials::multiselect(__FUNCTION__);
  }

  public static function schulerlabortyp(){

    officePartials::multiselect(__FUNCTION__);
  }

  public static function schulzeit(){

    officePartials::multiselect(__FUNCTION__);
  }

  public static function schulerlaborIst(){

    officePartials::multiselect(__FUNCTION__);
  }

  public static function kaoa(){

    officePartials::multiselect(__FUNCTION__);

  }
.
.
.
.


  private function multiselect($name){
    $parser=new selectParser();
    $options=$parser->getData($name,officePartials::$table);

    $inputs=new inputTypes();
    $inputs->select('multiselect', $name, $name, officePartials::$group,$options);

  }

}


?>
