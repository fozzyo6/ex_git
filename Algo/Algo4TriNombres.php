<?php //PHP ouvert

    //Algo 4 tri des nombres + petit au + grand

    $Tab1 = [0];
    
    do{ //Début de la boucle de tri
        $Nombre = readline("Veuillez me donner un nombre : ");
        $ManuCompt = 0;
        for ($compteur = 0 ;$compteur<count($Tab1) ; $compteur++){
                       if ($Nombre<$Tab1[$compteur]){
                $Tab2 = array_splice($Tab1,-(count($Tab1)-$compteur));
                array_unshift($Tab2,$Nombre);
                $Tab1 = array_merge($Tab1, $Tab2);
                break;
            }
            $ManuCompt++;
                }if(($ManuCompt) == count($Tab1)){
                array_push($Tab1, $Nombre);
                }
       }while ($Nombre != 0);
  
       for($compteur=1 ; $compteur<count($Tab1); $compteur++){
        echo $compteur . " : " . $Tab1[$compteur] . PHP_EOL;
    }
?>