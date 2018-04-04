<?php
include_once '../wp-content/plugins/sql-entries/common/databaseConnection.php';
include_once 'office_entry_partials.php';
include_once 'person_entry_partials.php';
include_once 'selects.php';
include_once '../wp-content/plugins/sql-entries/backend/php/model/sql_entries_data.php';
include_once '../wp-content/plugins/sql-entries/backend/php/model/translate.php';

class panels{
  var $path='../wp-content/plugins/register-car/backend/';
  var $lang='';

  public function __construct(){
    $this->lang=new translator();
  }

  public function listOfOfficeEntries(){
    $db=new getSQLEntriesdata();
    $db->getEntriesData('wp_office_entries','officeEntries');

  }

  public function addOfficeEntry(){

    echo '<form class="form-control" action="../wp-content/plugins/sql-entries/backend/php/controller/panels_actions_execute.php?action=addOffice&table=wp_office_entries" method="POST" id="office-form"/>';

    echo '<div class="row">'; #start 1st row
        echo '<div class="form-group col-md-3">';
          officePartials::systemeintrag();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::eintragName();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::grundung();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::ansprechpartner();
        echo '</div>';
    echo '</div>';       #end 1st row

    echo '<div class="row">'; #start 2nd row
        echo '<div class="form-group col-md-3">';
          officePartials::schule();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::strase();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::plz();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::stadt();
        echo '</div>';
    echo '</div>';       #end 2 row

    echo '<div class="row">'; #start 3 row
        echo '<div class="form-group col-md-3">';
          officePartials::bezirk();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::latitude();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::longitude();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::website();
        echo '</div>';
    echo '</div>';       #end 3 row

    echo '<div class="row">'; #start 4 row
        echo '<div class="form-group col-md-3">';
          officePartials::telefon();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::aktiveFachbereiche();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::formaFirmy();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::angebote();
        echo '</div>';
    echo '</div>';       #end 4 row

    echo '<div class="row">'; #start 4 row
        echo '<div class="form-group col-md-3">';
          officePartials::beschreibung();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::arbeitsschwerpunkte();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::schulerlabo();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::schulerlabortyp();
        echo '</div>';
    echo '</div>';       #end 4 row

    echo '<div class="row">'; #start 5 row
        echo '<div class="form-group col-md-3">';
          officePartials::schulzeit();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::schulerlaborIst();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::kaoa();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::einzugsgebiet();
        echo '</div>';
    echo '</div>';       #end 5 row

    echo '<div class="row">'; #start 6 row
        echo '<div class="form-group col-md-3">';
          officePartials::fortbildung();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          officePartials::vorbereitung();
        echo '</div>';
        echo '<div class="form-group col-md-3">';
          echo '<input type="submit" name="submit-office" value="'.$this->lang->translate("Dodaj wpis").'" class="btn btn-large btn-warning"/>';
        echo '</div>';

        echo '<div class="form-group col-md-3">';
        echo '</div>';
    echo '</div>';       #end 6 row

    echo '</form>'  ;
  }
.
.
.
.

}

 ?>
