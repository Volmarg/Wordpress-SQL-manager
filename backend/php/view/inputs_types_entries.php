<?php
include_once '../wp-content/plugins/sql-entries/backend/php/model/select_parser.php';
include_once '../wp-content/plugins/sql-entries/backend/php/model/translate.php';

class inputTypes{

  public function select($class,$id,$name,$group,$options){
    $language=new translator();

    echo "<label for='$id' ><b>".$language->translate($name)."</b></label>";
    echo "<select class='$class' id='$id' name='$name' $required>";
      foreach($options as $oneOption){
        echo '<option> '.$oneOption.' </option>';
      }
    echo '</select>';
  }

  public function text($class,$id,$name,$group){ #is long ?
 .
 .
 .
  }

  public function number($class,$id,$name,$group,$min='',$max='',$required='',$filter=''){ #add limiter for how many can be numbers can be added | add
  .
  .
  .
  
  }

}

?>
