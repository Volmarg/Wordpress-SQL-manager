<?php
include_once 'stepsView.php';
include_once 'tabsSwitcher.php';
$step=new steps();
$tab=new tabsSwitch();
#1. Get all types from DB
$data=$step->type();
$tab->printTabs($data);

#2. Now iterate overall types and add options
foreach($data as $id=>$singleCar){

 #3. First display type/space information
 echo '<div id="tab'.$singleCar[0].'">
  <h2 style="display:inline;">'.$singleCar[1].'</h2>,';
 echo '<h3 style="display:inline;"> Max:';
    for($x=1;$x<=$singleCar[2];$x++){
      echo '👤';
    }
  echo '</h3>';
#👤🕴🕺👦
  #Nest register form beginning
  $step->registerFormStart($singleCar[0]);
  #4. Now display options to pick how many ppl gonna ride

  #5. Pick up the models in that type
  echo '<legend><span class="number">1</span> Wybierz model </legend>';
  $step->model($singleCar[1]);

  echo '<legend><span class="number">2</span> Podaj ilość podróżników</legend>';
  $step->size($singleCar[2]);

  #4.1 Pick up the date
  echo '<legend><span class="number">3</span> Podaj datę wyjazdu i powrotu</legend>';
  $step->registerFormDates($singleCar[0]);

  #6. Now the expected price
  echo '<legend><span class="number">4</span>Przewidywana cena przewozu</legend>';
  $step->price($singleCar[0]);

  #7. Now the additional options
  echo '<legend><span class="number">5</span>Wybierz dodatkowe wyposazenie</legend>';
  $step->additionalSetup($singleCar[0]);
  echo '<legend><span class="number">6</span>Przewidywana cena dodatkowe sprzętu</legend>';
  $step->priceSummary($singleCar[0]);
  echo '<legend><span class="number">7</span>Kwota całości</legend>';
  $step->totalSumUp($singleCar[0]);
  #8. Add the date
  $step->callendar();

  #9. Register Your travel
  echo '<legend><span class="number">8</span>Podaj dane osobowe</legend>';
  $step->registerForm($singleCar[0]);
 echo '</div>';
}

?>
