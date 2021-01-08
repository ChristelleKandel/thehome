<?php 
require_once 'models/boissons.model.php';

foreach($rows as $row): 
    ?>
    <tr>
        <td class="w-25"><?= $row['nom_article'] ?></td>
        <td class="w-50"></td>
        <td><?= $row['prix_article'] ?> €</td> 
        <td><a href="../admin/modifier_article/<?= $row['nom_article']?>"><i class="fas fa-edit text-primary"></i></a></td>
        <td><a href="models/remove.model.php?id=<?= $row['nom_article']?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
    </tr> 
<?php  endforeach; ?>



