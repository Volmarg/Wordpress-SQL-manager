function ajaxEditEntries(query,table){

  var ajax=new XMLHttpRequest();
  var path='/wp-content/plugins/sql-entries/backend/php/model/ajax_exec.php';
  var params='?action=saveEntryEdit';
  var sql=encodeURI(query);
  //alert(path+params);
  ajax.open('GET',path+params+'&sql='+sql+'&table='+table,false);
  ajax.send();
  location.reload();

}

function ajaxRemoveEntries(query,table){
  var ajax=new XMLHttpRequest();
  var path='/wp-content/plugins/sql-entries/backend/php/model/ajax_exec.php';
  var params='?action=removeEntryEdit';
  var sql=encodeURI(query);
  //alert(path+params);
  ajax.open('GET',path+params+'&sql='+sql+'&table='+table,false);
  ajax.send();

  //location.reload();

}

function ajaxRemoveListElement(query){
  var ajax=new XMLHttpRequest();
  var path='/wp-content/plugins/sql-entries/backend/php/model/ajax_exec.php';
  var params='?action=removeSelect';
  var sql=encodeURI(query);
  //alert(path+params);
  ajax.open('GET',path+params+'&sql='+sql,false);
  ajax.send();
}

//ajaxEditEntries('1','2');
