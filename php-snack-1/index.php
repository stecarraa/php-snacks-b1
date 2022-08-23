<?php 

$matches = [

    [
        "casa"=> "milan",
        "ospiti"=>"inter",
        "punteggioCasa"=>3,
        "punteggioOspiti"=>1

    ],

    [
        "casa"=> "sampdoria",
        "ospiti"=>"genoa",
        "punteggioCasa" => 2,
        "punteggioOspiti"=>3

    ],


    [
        "casa"=> "torino",
        "ospiti"=>"juventus",
        "punteggioCasa"=>3,
        "punteggioOspiti"=>3

    ],


    [
        "casa"=> "napoli",
        "ospiti"=>"crotone",
        "punteggioCasa"=>0,
        "punteggioOspiti"=>3

    ],


    [
        "casa"=> "lecce",
        "ospiti"=>"livorno",
        "punteggioCasa"=>1,
        "punteggioOspiti"=>3

    ],


]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
for ($i=0 ; $i < count($matches) ; $i++){

    $match=$matches[$i];

    echo "<p>". $matches[$i]['casa']. '-' .$matches[$i]['ospiti'] .'=' .$matches[$i]['punteggioCasa'] .'-'.$matches[$i]['punteggioOspiti']."<p>";
};


?>

    
</body>
</html>