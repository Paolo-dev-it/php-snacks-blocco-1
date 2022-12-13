<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$array = [
    [
        'name' => 'Gianluca',
        'lastname' => 'Sirianni',
        'vote' => [7,8,8,5,7,4]
    ],
    [
        'name' => 'Elia',
        'lastname' => 'Magris',
        'vote' => [2,3,4,8,1,3]
    ],
    [
        'name' => 'Paolo',
        'lastname' => 'Nicoletti',
        'vote' => [10,9,8,7,6,5]
    ]
    ];



// for($i=0; $i<count($array); $i++){

//     echo $array[$i]['name']. ' - ' . $array[$i]['lastname'];

//     for($n=0; $n<count($array[$n]['vote']); $n++){
//         echo $array[$n]['vote'];
//     }

// }

// for($i=0; $i<count($array); $i++){

//     echo $array[$i]['name']. '  ' . $array[$i]['lastname'];

//     for($n=0; $n<count($array[$i]['vote']); $n++){

//         echo  '<br/>'.$array[$n]['vote'] ;

//     }
// }

foreach($array as $value){
    echo $value['name']. ' ';
    echo $value['lastname']. ' ';
    echo array_sum($value['vote']) / count($value['vote']) . '<br/>' ;
}
    

?>