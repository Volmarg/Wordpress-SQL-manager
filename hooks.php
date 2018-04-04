<?php

class hooks{

public function entriesPages($dir) #generate virual pages
  {

  	if(preg_match('#'.'entry-([a-zA-Z]+)-([0-9]+)'.'#',$_SERVER["REQUEST_URI"],$id)){ #if this url is fine then load theme
      $content=$this->sql($id[2],$id[1]); #get data to include
      $domain=$_SERVER['REQUEST_URI'];
      $linkToJson='json-'.$id[1].'-'.$id[2];
  		include($dir."/sql-entry-plugin-page.php"); #getTpl
      die();

  	}
  }

  public function entriesJsons() #genertae virutal json files
  {
  	if(preg_match('#'.'json-([a-zA-Z]+)-([0-9]+).json'.'#',$_SERVER["REQUEST_URI"],$id)){ #if this url is fine then load theme
      $json=new toJava();
      $content=$this->sql($id[2],$id[1]); #get data to include
      $jsonString=$json->buildObject($content[1],$content[0],'');

      echo '<pre>';
          $json_array = json_decode($jsonString, JSON_PRETTY_PRINT);
          echo json_encode($json_array,JSON_PRETTY_PRINT);
      echo '</pre>';

      die();
  	}
  }


  private function sql($id,$entry){
    if(strstr($entry,'person')){
   .
   .
   .
   .
   .

    return $returnable;
  }


}


?>
