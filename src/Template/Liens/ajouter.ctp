<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page Ajouter</title>
</head>
<body>

<form method="post">
    Titre <input type="text" name="Titre" value="" /><br />
    URL <input type="text" name="Url" value="" /><br />
    Webmaster <input type="text" name="Webmaster" value="" /><br />
    Description <input type="text" name="Description" value="" /><br />
    Thème <select class="form-control Mytext input" name="Theme" id="Theme" >
        <option value="Actu" >Actualité</option>
        <option value="Musiq" >Musique</option>
        <option value="Sport" >Sport</option>
        <option value="Sciences" >Sciences</option>
        <option value="Cinéma" >Cinéma</option>
        <option value="Divers" >Divers</option>
    </select><br />
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>