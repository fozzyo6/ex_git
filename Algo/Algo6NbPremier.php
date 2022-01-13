<?php //PHP ouvert

//Nombre entier et diviseur

$Diviseur = [];
do {
$Nombre = readline("Veuillez me donner un nombre : "); 
}while (!is_numeric($Nombre)||$Nombre<0);                        //nombre choisi par utilisateur
//$Nombre = round(sqrt($Nombre)+1);                             //arrondi de la racine du nombre
var_dump ($Nombre);
for ($compteur = 1 ;$compteur<=$Nombre ;$compteur++){           //boucle de calcul
    //if (($Nombre/$compteur)==round($Nombre/$compteur)){       //calcul des diviseurs methode ancienne à la yoyo
        if ($Nombre % $compteur==0) {
        array_push($Diviseur,$compteur);                        //entré du diviseur dans le tableau
    }
}
sort($Diviseur);
for($compteur=0 ; $compteur<count($Diviseur); $compteur++){     //compteur pour affichage du tableau
    echo $Diviseur[$compteur] . PHP_EOL;    //affichage d'une cellule du tableau
}
if (count($Diviseur)==2) {                                      //vérification si nombre premier
    echo "Bravo vous venez d'inventer un nombre premier";
}
?> 