<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page Détails</title>
</head>
<body>

<h1>Détails</h1>

<div>Titre = <?= $lien->Titre ?> </div>
<div>Webmaster = <?= $lien->Webmaster ?> </div>
<div>URL = <?= $lien->Url ?> </div>
<div>Description = <?= $lien->Description ?> </div>

<div><a href="<?= $this->Url->build("/liens/modif/"). $lien->Id ?>">Modifier</a></div>
<div><a href="<?= $this->Url->build("/liens/supprim/"). $lien->Id ?>">Supprimer</a></div>

</body>
</html>




