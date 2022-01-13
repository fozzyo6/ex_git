<?php //PHP ouvert

//Nombre entier et diviseur

$Diviseur = [];

$Nombre = readline("Veuillez me donner un nombre : ");              //nombre choisi par utilisateur
$NbLast = round(sqrt($Nombre));                                     //arrondi de la racine du nombre
//var_dump ($NbLast);
for ($compteur = 1 ;$compteur<=$NbLast ;$compteur++){               //boucle de calcul
        //if (($Nombre/$compteur)==round($Nombre/$compteur)){       //calcul des diviseurs à l'ancienne
        if ($Nombre % $compteur==0) {                               //calcul des diviseurs avec modulo
        array_push($Diviseur,$compteur,($Nombre/$compteur));        //entrer du diviseur dans le tableau
    }
}
for($compteur=0 ; $compteur<count($Diviseur); $compteur++){         //compteur pour affichage du tableau
    echo $Diviseur[$compteur] . PHP_EOL;                            //affichage d'une cellule du tableau
}
if (count($Diviseur)==2) {                                          //vérification si nombre premier
    echo "Bravo vous venez d'inventer un nombre premier";
}
?>