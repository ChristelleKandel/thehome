<div class="row bg-b">
    <table class="mb-0  col-lg-6 table bg-b">
        <tbody>
            <?php 
                foreach ($tab1 as $tab):?>
                    <tr class="container">
                        <td class="pt-2"><b class="h4"><?= $tab['nom_article']?></b><br><p class="pl-2"><i><?= $tab['description_article'] ?></i></p></td>
                        <td class=" h6 align-text-bottom text-right pt-3 pr-3 pr-lg-5 w-25 "><?= $tab['prix_article'] ?> €</td>
                    </tr> 
                <?php  endforeach; ?>
        </tbody>
    </table>
    <table class="mb-0  col-lg-6 table bg-b">
        <tbody>
            <?php 
                foreach ($tab2 as $tab):?>
                    <tr class="container">
                        <td class="pt-2"><b class="h4"><?= $tab['nom_article']?></b><br><p class="pl-2"><i><?= $tab['description_article'] ?></i></p></td>
                        <td class=" h6 align-text-bottom text-right pt-3 pr-3 pr-lg-5 w-25 "><?= $tab['prix_article'] ?> €</td>
                    </tr> 
                <?php  endforeach; ?>
        </tbody>
    </table>
</div>