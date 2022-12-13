<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
            ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
            ]
        ];

//     foreach ($db as $workers => $value) {
//     echo('->');
//     echo $workers;
//     echo(' - ');

//     foreach ($value as $db) {

//         echo $db['name']. ' '. '<br>';
        
//         echo $db['lastname']. ' '. '<br>';
         
//     }
// }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <?php
foreach ($db as $key => $value) {
    echo "<div class='$key'>";
    foreach ($value as $person) {
        echo "<p>" . $person['name'] . " " . $person['lastname'] . "</p>";
    }
    echo "</div>";
}
?>

</body>
</html>