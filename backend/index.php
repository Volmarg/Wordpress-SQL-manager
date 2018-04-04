<?php

include_once 'php/view/panels_display.php';
include_once 'php/view/tabsSwitching.php';
include_once 'php/model/translate.php';

function load_plugin_backend(){

#initialize classes instances
$panels = new panels;
$tabs=new tabsSwitch;
$lang=new translator;
.
.
.
#display form for Person Entries
echo '<section class="hiddenTab" id="personFormEntries" data-function="tabs-switchers">';
  echo '<h1> '.$lang->translate('Person entry form').' </h1>';
  $panels->addPersonEntry();
echo '</section>';

#display office entries from database
echo '<section class="hiddenTab" id="officeExistingEntries" data-function="tabs-switchers">';
  echo '<h1> '.$lang->translate('Office entries in database').' </h1>';
  $panels->listOfOfficeEntries();
echo '</section>';
.
.
.
.
#edit list of options for peron
echo '<section class="hiddenTab" id="personSelectsList" data-function="tabs-switchers">';
  echo '<h1> '.$lang->translate('Selects for Person form ').'</h1>';
  $panels->personSelectsList();
echo '</section>';
}

?>
