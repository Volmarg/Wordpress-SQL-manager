<?php
include_once 'panels_actions.php';
$do=new backendDataManage($_POST);

if($_GET['action']=='addOffice'){
  $do->addOffice($_GET['table']);

}elseif($_GET['action']=='addPerson'){
  $do->addPerson($_GET['table']);

}elseif($_GET['action']=='addSelect'){
  $do->addSelect($_GET['table'],$_GET['column'],$_GET['id']);
}



?>
