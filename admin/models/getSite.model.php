<?php require_once 'connexion.php';
$sql = "SELECT * FROM `sections`";
$stmt = $bdd->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$section1 =[];
$section2 =[];
$section3 =[];

 foreach($rows as  $row):
    if ($row['id'] == "section1"){
        $section1['titre'] =$row['titre'];
        $section1['sous_titre'] =$row['sous_titre'];
        $section1['contenu'] =$row['contenu'];
    }
    if ($row['id'] == "section2"){
        $section2['titre'] =$row['titre'];
        $section2['sous_titre'] =$row['sous_titre'];
        $section2['contenu'] =$row['contenu'];
    }
    if ($row['id'] == "section3"){
            $section3['titre'] =$row['titre'];
            $section3['sous_titre'] =$row['sous_titre'];
            $section3['contenu'] =$row['contenu'];
    }
endforeach;
?>