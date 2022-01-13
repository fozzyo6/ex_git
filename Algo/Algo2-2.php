<?php //PHP ouvert

//Algo 2 Somme des nombres inférieur ou égal
$reponse = readline("Donnez un nombre entre 0 et 100 : ");
    echo "".PHP_EOL;

    $Nb = 0;        // Description variable
    $Total = 0;

    while($Nb != $reponse){ // Debut de la boucle
        $Nb++;              //Incrémentation de mon nombre
        echo $Nb;
        echo" ";
        $Total = $Nb + $Total;
        
    }
    echo "La somme est ",$Total
?>    