<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page Modification</title>
</head>
<body>
<h1> Modification </h1>
<form method="post">
    Titre <input type="text" name="Titre" value="<?= $lien->Titre ?>" /><br />
    URL <input type="text" name="Url" value="<?= $lien->Url ?>" /><br />
    Webmaster <input type="text" name="Webmaster" value="<?= $lien->Webmaster ?>" /><br />
    Thème <select name="Theme" id="Theme" >
        <option value="Actu" <?php if ($lien->Theme=="Actu") echo "selected"; ?> >Actualité</option>
        <option value="Musiq" <?php if ($lien->Theme=="Musiq") echo "selected"; ?> >Musique</option>
        <option value="Sport" <?php if ($lien->Theme=="Sport") echo "selected"; ?> >Sport</option>
        <option value="Sciences" <?php if ($lien->Theme=="Sciences") echo "selected"; ?> >Sciences</option>
        <option value="Cinéma" <?php if ($lien->Theme=="Cinéma") echo "selected"; ?> >Cinéma</option>
        <option value="Divers" <?php if ($lien->Theme=="Divers") echo "selected"; ?> >Divers</option>
    </select><br />
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>