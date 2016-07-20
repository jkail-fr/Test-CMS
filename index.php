
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
            Logo / nom de la société
            <label>Baseline</label><input type="text" name="baseline" id="baseline" placeholder="Insérez votre baseline" /><br>
            <label>Numéro</label><input type="text" name="numero-nl" id="numero-nl" placeholder="Newsletter numéro ?" /><br>
            <label>Date</label><input type="text" name="date-nl" id="date-nl" placeholder="Date (exemple Mois de Mars)" /><br>
            date + numero de la newsletter

            <h2>Contenu</h2>
            <label>Couleur body</label><input type="color" placeholder="Couleur body" id="color-body" name="color-body"/><br>
            <label>Couleur background</label><input type="color" placeholder="Couleur background" id="color-background" name="color-container" /><br>

            <label>Nombre de bloc de la ligne</label><input type="number" class="bloc-number" name="bloc-number" /><br>
            <input type="button" value="Ajouter une ligne" /><br>
            row : nombre de bloc + titre

            <h2>Footer</h2>
            <label>Url de désinscription : </label><input type="url" name="url-unsuscribe" id="url-unsuscribe" placeholder="URL de désinscription" /><br>

            <h2>Generateur de lien de tracking google</h2>
            <label>Nom de la campagne :</label>
            <input type="text" placeholder="Campagne" name="campaign-name" />
            <input type="submit" value="Balance la purée Marcel !" />

        </form>
    </body>

</html>
