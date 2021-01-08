<?php 
// Gestion de l'affichage de la requete
//On souhaite diviser en 2 parties le resulat de la requete 
//on determine si le tableau a un nombre d'element divisible par 2
$size = count($rows); 
if($size%2 == 0){
    // si OUI alors on conserve la taille divisé par2
    $sizePart1 = $size/2;
}
else{
    //si NON alors on conserve la taille divisé par 2 arrondi a l'entier superieur (Pour un tableau de 5 on obtiendra 3)
    $sizePart1 = ($size/2)+.5;
}
//initialisation des 2 tableaux et de la variable $compt qui sera le compteur de tour
$compt = 1;
$tab1 =[];
$tab2 =[];

foreach($rows as $row): 
    //pour chaque tuple de ma requete 
    //SI $compt est inferieur ou égal a la valeur de $sizePart1
    if ($compt<=$sizePart1){
        //alors on push dans le premier tableau 
        array_push($tab1,$row);
        //on incremente le compteur de 1
        $compt++;
    }else{
        //sinon on push dans le second tableau
        array_push($tab2,$row);
    }?>
<?php  endforeach; 

?>
