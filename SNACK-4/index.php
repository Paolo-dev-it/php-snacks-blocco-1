<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

    $array = [];

    while(count($array) < 15) {

    $randomNumber = rand(1, 20);

    if(!in_array($randomNumber, $array)){

     echo $array[] = $randomNumber . ' '. '<br>';

    }
  } 
   
?>