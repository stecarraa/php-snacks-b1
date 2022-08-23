<!-- 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->


 <?php
// $random_number_array = range(0,1000);
// shuffle($random_number_array );
// $random_number_array = array_slice($random_number_array ,0,15);

// print_r($random_number_array);

$numbers=[];

while (count($numbers) < 15){
    $randomNumber = rand(1,30);

    if(!in_array($randomNumber, $numbers)) {
        $numbers[] = $randomNumber;
    }

};

var_dump($numbers);






 ?>

