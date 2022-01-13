<?php //PHP ouvert

    //Algo 1 Trouver un nombre;
    $NBaTrouver = rand(0,100);
    echo $NBaTrouver;
    $reponse = -1;
    
    while($reponse != $NBaTrouver){ //debut de la boucle
        $reponse = readline("quel est le nombre mystère ? ");
        echo "".PHP_EOL;
        if ($reponse > $NBaTrouver) { //réponse plus grande
            echo "c'est moins".PHP_EOL;
        } elseif ($reponse < $NBaTrouver){
            echo "c'est plus".PHP_EOL; //réponse plus petite
        }
       
    }
    echo "bravo tu as trouvé";
?>