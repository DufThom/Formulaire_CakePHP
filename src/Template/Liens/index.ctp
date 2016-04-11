<!-- File: src/Template/Liens/index.ctp  -->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vue des liens</title>
</head>
<body>

<h1>Tous les liens</h1>
<div><a href="<?= $this->Url->build("/liens/ajouter/")?>">Ajouter un lien</a> </div>
<table>
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>URL</th>
        <th>Thème</th>
        <th></th>
    </tr>

    <?php foreach($liens as $lien): ?>
    <tr>
        <td><?= $lien->Id ?></td>
        <td><?= $lien->Titre ?></td>
        <td><?= $lien->Url ?></td>
        <td><?= $lien->Theme ?></td>
        <td><a href="<?= $this->Url->build("/liens/details/") . $lien->Id ?>">Détails</a></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>

