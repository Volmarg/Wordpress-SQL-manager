<?php

include_once 'inputs_types_entries.php';
include_once '../wp-content/plugins/sql-entries/backend/php/model/select_parser.php';

class personPartials{

  static $group='person';
  static $input='';
  static $table='wp_person_selects';

  public static function systemeintrag(){

    $parser=new selectParser();
    $options=$parser->getData(__FUNCTION__,personPartials::$table);

    $inputs=new inputTypes();
    $inputs->select('multiselect', __FUNCTION__, __FUNCTION__, personPartials::$group,$options);

  }

  public static function eintragName(){

    $inputs=new inputTypes();
    $inputs->text('text', 'eintragName', 'eintragName', personPartials::$group);

  }

  public static function grundung(){

    $inputs=new inputTypes();
    $inputs->number('number', 'grundung', 'grundung', personPartials::$group,'1800','2500');

  }
  .
  .
  .
  .
  .

}


?>
