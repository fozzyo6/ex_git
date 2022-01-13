<?php //PHP ouvert

    //Algo 3 Plus grand nombre
    $PlusGrand =null;

    for ($compteur=0; $compteur!=10; $compteur++) {
        echo "essai "; echo $compteur; echo " : ";
        $reponse = readline("Donne moi un nombre entier : ");
        if ($reponse > $PlusGrand) {
            $PlusGrand = $reponse;
        }
    }
    echo "le plus grand nombre est : ";
    echo $PlusGrand;
    ?>   