<?php

include_once 'ajax.php';
$ajax = new entriesEdit();
#save data upon table of entries edit
if(@$_GET['action']=='saveEntryEdit'){
  $ajax->save($_GET['sql'],$_GET['table']);
}elseif(@$_GET['action']=='removeEntryEdit'){
  $ajax->remove($_GET['sql'],$_GET['table']);
}elseif(@$_GET['action']=='removeSelect'){
  $ajax->removeSelect($_GET['sql'],$_GET['table']);
}



?>
