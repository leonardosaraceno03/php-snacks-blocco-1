<?php
$partite = [
    [
        "squadracasa" => "Milano",
        "squadraospite"=> "Cantu",
        "punticasa"=> 50,
        "puntiospite"=> 60,
    ],
    [
        "squadracasa" => "Genova",
        "squadraospite"=> "Bari",
        "punticasa"=> 70,
        "puntiospite"=> 60,
    ],
    [
        "squadracasa" => "Treviso",
        "squadraospite"=> "Palermo",
        "punticasa"=> 80,
        "puntiospite"=> 60,
    ],
];
for($i = 0; $i < count($partite); $i++){
    echo $partite[$i]["squadracasa"] . '-' . $partite[$i]["squadraospite"] . '|' . $partite[$i]["punticasa"] . "-" . $partite[$i]["puntiospite"];
}



?>
