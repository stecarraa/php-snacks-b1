<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->



<?php
$students = [
    [
        "name" => "Giorgio",
        "surname" => "Rossi",
        "votes" => [
            "latin" => rand(1, 10),
            "math" => rand(1, 10),
            "italian" => rand(1, 10),
            "physics" => rand(1, 10)
        ]
    ],
    [
        "name" => "Matteo",
        "surname" => "Bianchi",
        "votes" => [
            "latin" => rand(1, 10),
            "math" => rand(1, 10),
            "italian" => rand(1, 10),
            "physics" => rand(1, 10)
        ]
    ],
    [
        "name" => "Andrea",
        "surname" => "Ferrari",
        "votes" => [
            "latin" => rand(1, 10),
            "math" => rand(1, 10),
            "italian" => rand(1, 10),
            "physics" => rand(1, 10)
        ]
    ],


];
?>

<div>
    <?php for ($i = 0; $i < count($students); $i++) {
        $sum = array_sum($students[$i]["votes"]);
        $average = number_format($sum / count($students[$i]["votes"]), 1);
    ?>
        <div>
            <?php
            echo $students[$i]["name"] . " " . $students[$i]["surname"] . " / Average Votes: " . "$average"
            ?>
        </div>
    <?php } ?>
</div>


</body>

</html>