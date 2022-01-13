<?php //PHP ouvert

    //Algo 1 Trouver un nombre;
    $NBaTrouver = rand(0,100);
    echo $NBaTrouver;
    $reponse = readline("quel est le nombre mystère ?");
    echo "".PHP_EOL;

    while($reponse != $NBaTrouver){ //debut de la boucle

        if ($reponse > $NBaTrouver) { //réponse plus grande
            echo "c'est moins".PHP_EOL;
        } else {
            echo "c'est plus".PHP_EOL; //réponse plus petite
        }
        $reponse = readline("quel est le nombre mystère ?");
        echo "".PHP_EOL;
    }
    echo "bravo tu as trouvé";
?>