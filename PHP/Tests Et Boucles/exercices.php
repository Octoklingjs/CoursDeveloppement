1)
<?php
    $a = 85;
    $b = 52;

    $couleur = "vert";

    if($a > $b){
        echo "Bonjour tout le monde\n";
    }

    if($a != $b){
        echo "Bonjour tout le monde\n";
    }

    if($a == $b){
        echo "Oui\n";
    }
    else
    {
        echo "Non\n";
    }

    if($a == $b){
        echo "1\n";
    }
    else if($a > $b){
        echo "2\n";
    }
    else{
        echo "3\n";
    }

    switch($couleur){
        case "rouge":
            echo "Bonjour\n";
            break;
        case "vert":
            echo "bienvenue\n";
            break;
        default:
            echo "Les goûts et mes couleurs, ça ne se discute pas\n";
            break;
    }

    if($couleur == "rouge"){
        echo "Bonjour\n";
    }
    else if($couleur == "vert"){
        echo "bienvenue\n";
    }
    else{
        echo "Les goûts et mes couleurs, ça ne se discute pas\n";
    }
    echo "\n";
?>

2)
<?php
    $a = 0;
    $b = 20;
    $c = 100;
    $d = 1;
    while ($a <= 10){
        echo "$a";
        $a++;
    }

    echo "\n";
    
    while ($b > 6){
        echo "$b";
        $b--;
    }

    echo "\n";

    while($c > 20){
        echo "$c";
        $c = $c / 10;
    }

    echo "\n";

    while($d < 1000){
        echo "$d";
        $d = $d * 100;
    }
    echo "\n";
?>

3)
<?php
    $e = 0;
    $f = 20;
    $g = 100;
    $h = 1;
    do {
        echo "$a";
        $a++;
    }
    while($a <= 10);

    echo "\n";
    
    do{
        echo "$b";
        $b--;
    }
    while ($b > 6);

    echo "\n";

    do{
        echo "$c";
        $c = $c / 10;
    }
    while ($c > 20);

    echo "\n";

    do{
        echo "$d";
        $d = $d * 100;
    }
    while($d < 1000);
    echo "\n";
?>

4)
<?php
    for($i = 1; $i <=10; $i++){
        echo "Résultat: " . $i * 10 . "\n";
    }
    
    for($i = 1; $i <=10; $i++){
        echo "3 x ". $i . " = " . $i * 3 . "\n";
    }
    echo "\n";
?>