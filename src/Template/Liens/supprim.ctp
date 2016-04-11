<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page Suppression</title>
</head>
<body>

<h1> Suppression </h1>
<form method="post">
    Titre <input type="text" name="Titre" value="<?= $lien->Titre ?>" /><br />
    URL <input type="text" name="Url" value="<?= $lien->Url ?>" /><br />
    Webmaster <input type="text" name="Webmaster" value="<?= $lien->Webmaster ?>" /><br />
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>