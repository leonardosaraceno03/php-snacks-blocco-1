<?php

$alunni = [
    [
        'nome' => 'Herbert',
        'cognome' => 'Ballerina',
        'voti' => [4,5,6]
    ],
    [
        'nome' => 'Maccio',
        'cognome' => 'Capatonda',
        'voti' => [7,9,8]
    ]
];


for($i=0; $i < count($alunni); $i++){

    echo '<hr>';
    echo '<br/>';
    echo $alunni[$i]['nome'] . '-' . $alunni[$i]['cognome'];
    echo '<br/>';
    $media = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
    echo '<br/>';
    echo 'La media è: ' . $media;
    echo '<br/>';
    echo '<br/>';
    
}

?>