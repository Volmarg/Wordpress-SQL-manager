<?php

include_once '../wp-content/plugins/sql-entries/backend/php/model/translate.php';

class selectsPrint{

  public function printer($options,$type){
    $lang=new translator;

    foreach($options[0] as $num=>$row){

            if($num!=0){#skip first since it's id
      echo '<h5>'.$lang->translate($options[1][$num]).'</h5>';
      echo '<table class="table table-striped" data-id="'.$num.'" data-column="'.$options[1][$num].'" data-table="'.$type.'">';
          echo '<thead>';
            echo '<tr>';
              echo '<th>Select</th>';
              echo '<th>Remove</th>';
            echo '</tr>';
          echo '</thead>';

            echo '</tbody>';
              foreach($row as $option){
                    echo '<tr>';
                      echo '<td data-type="name">'.$option.'</td>';
                      echo '<td data-remove="'.$option.'" class="removeSingleSelect" onclick="removeSelect(this)" id="'.$num.'" data-table="'.$type.'">✖</td>';
                    echo '</tr>';
            }
          echo '<tbody>';
      echo '</table>'; 

      #input field
        echo '<form method="POST" action="../wp-content/plugins/sql-entries/backend/php/controller/panels_actions_execute.php?table='.$type.'&id='.$num.'&action=addSelect&column='.$options[1][$num].'">';
          echo '<div class="form-group" style="display:flex;"/>';
            echo '<input type="text" name="new-option" placeholder="" class="form-control" style="margin:5px;"/>';
            echo '<input type="submit" value="'.$lang->translate("Add option").'" class="btn btn-xs btn-default" style="margin:5px;"/>';
          echo '</div>';
        echo '</form>';

      }
    }
  }
}
?>
