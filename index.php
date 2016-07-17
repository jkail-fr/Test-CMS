
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generation de newsletter</title>
    </head>

    <body>
        <h1>Générateur de newsletter</h1>
        <form method="post" action="generator.php">
            <h2>Header</h2>
            <label>Url de la newsletter : </label><input type="url" name="url-nl" id="url-nl" placeholder="URL de la newsletter" /><br>
            lien de la version en ligne
            Logo / nom de la société
            Baseline / date + numero de la newsletter

            <h2>Contenu</h2>
            <label>Couleur body</label><input type="color" placeholder="Couleur body" id="color-body"/><br>
            <label>Couleur background</label><input type="color" placeholder="Couleur background" id="color-background"/><br>

            <label>Nombre de bloc de la ligne</label><input type="number" /><br>
            <input type="button" value="Ajouter une ligne" /><br>
            row : nombre de bloc + titre

            <h2>Footer</h2>
            <label>Url de désinscription : </label><input type="url" name="url-unsuscribe" id="url-unsuscribe" placeholder="URL de désinscription" /><br>

            <h2>Generateur de lien de tracking google</h2>
            <label>Nom de la campagne :</label>
            <input type="text" placeholder="Campagne" name="campaign_name" />
            <input type="submit" value="Balance la purée Marcel !" />

        </form>
    </body>

</html>
