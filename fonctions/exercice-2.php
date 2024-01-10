

<?php

function average(array $tabs) : float

       {
       
        foreach($tabs as $tab){
            $sum = array_sum($tabs);  
            $average = $sum /count($tabs);
            return $average;
        }
       }
        
  echo average([12, 15, 18, 9])."<br>";
  echo average([12, 15, 18, 11, 14])."<br>";

?>