<?php //PHP ouvert

    //Algo 3 Plus grand nombre
    $PlusGrand =-1;

    for ($compteur=1; $compteur!=11; $compteur++) {
        echo "essai "; echo $compteur; echo " : ";
        $reponse = readline("Donne moi un nombre entier ");
        echo "".PHP_EOL;
        if ($reponse > $PlusGrand) {
            $PlusGrand = $reponse;
        }
    }
    echo "le plus grand nombre est : ";
    echo $PlusGrand;
    ?>   