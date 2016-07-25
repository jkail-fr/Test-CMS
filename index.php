
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generation de newsletter</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container">
            <h1>Générateur de newsletter</h1>
            <form method="post" action="generator.php">
                <h2>Header</h2>
                <label for="url-nl">Url de la newsletter : </label><input type="url" name="url-nl" id="url-nl" placeholder="URL de la newsletter" /><br>
                Logo / nom de la société<br>
                <label for="baseline">Baseline :</label><input type="text" name="baseline" id="baseline" placeholder="Insérez votre baseline" /><br>
                <label for="">Numéro :</label><input type="text" name="numero-nl" id="numero-nl" placeholder="Newsletter numéro ?" /><br>
                <label for="date-nl">Date :</label><input type="text" name="date-nl" id="date-nl" placeholder="Date (exemple Mois de Mars)" /><br>


                <h2>Contenu</h2>
                <label for="color-body">Couleur de fond :</label><input type="color" placeholder="Couleur body" id="color-body" name="color-body"/><br>
                <label for="color-background">Couleur de la newsletter :</label><input type="color" placeholder="Couleur background" id="color-background" name="color-container" /><br>

                <label for="bloc-number">Nombre de bloc de la ligne :</label><input type="number" class="bloc-number" name="bloc-number" id="bloc-number" /><br>
                <input type="button" value="Ajouter une ligne" /><br>
                row : nombre de bloc + titre

                <h2>Footer</h2>
                <label for="url-unsuscribe">Url de désinscription : </label><input type="url" name="url-unsuscribe" id="url-unsuscribe" placeholder="URL de désinscription" /><br>

                <h2>Générateur de lien de tracking google</h2>
                <label for="campaign-name">Nom de la campagne :</label>
                <input type="text" placeholder="Campagne" name="campaign-name" id="campaign-name" />
                <input type="submit" value="Balance la purée Marcel !" />

            </form>
        </div>
    </body>

</html>
