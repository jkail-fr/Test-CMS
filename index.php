
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generation de newsletter</title>
        <link rel="stylesheet" href="css/style.css">
        <!--<script src="includes/function.js"></script>-->
    </head>

    <body>
    <?php
        include_once("includes/includes.php");
    ?>
        <div class="container">
            <h1>Générateur de newsletter</h1>
            <form method="post" action="generator.php">

                <h2>Général</h2>
                <label for="color-body">Couleur de fond :</label><input type="color" placeholder="Couleur body" id="color-body" name="color-body"/><br>
                <label for="police">Police : </label>
                    <select name="police" id="police">
                        <?php
                        foreach($polices as $key => $font) {
                            ?>
                        <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                        <?php
                        }
                        ?>
                    </select>


                <hr>
                <h2>Header</h2>
                <label for="url-nl">Url de la newsletter : </label><input type="url" name="url-nl" id="url-nl" placeholder="URL de la newsletter" /><br>
                Logo / nom de la société<br>
                <label for="baseline">Baseline :</label><input type="text" name="baseline" id="baseline" placeholder="Insérez votre baseline" /><br>
                <label for="">Numéro :</label><input type="text" name="numero-nl" id="numero-nl" placeholder="Newsletter numéro ?" /><br>
                <label for="date-nl">Date :</label><input type="text" name="date-nl" id="date-nl" placeholder="Date (exemple Mois de Mars)" /><br>

                <hr>
                <h2>Contenu</h2>

                <label for="color-background">Couleur de la newsletter :</label><input type="color" placeholder="Couleur background" id="color-background" name="color-container" /><br>

                <label for="bloc-number">Nombre de bloc des lignes :</label><input type="number" class="bloc-number" name="bloc-number" id="bloc-number" min="1" max="5" /><br>
                <label for="row-number">Nombre lignes :</label><input type="number" class="row-number" name="row-number" id="row-number" min="1" /><br>


                <hr>
                <h2>Footer</h2>
                <label for="url-unsuscribe">Url de désinscription : </label><input type="url" name="url-unsuscribe" id="url-unsuscribe" placeholder="URL de désinscription" /><br>

                <hr>
                <h2>Tracking : Générateur de lien google</h2>
                <label for="source-tracking">Nom de la source :</label>
                <input type="text" placeholder="Source" name="source-tracking" id="source-tracking" /><br>
                <label for="medium-tracking">Nom de la campagne :</label>
                <input type="text" placeholder="Medium" name="medium-tracking" id="medium-tracking" /><br>
                <label for="campaign-tracking">Nom de la campagne :</label>
                <input type="text" placeholder="Campagne" name="campaign-tracking" id="campaign-tracking" /><br>
                <label for="content-tracking">Nom de la campagne :</label>
                <input type="text" placeholder="Contenu" name="content-tracking" id="content-tracking" /><br>
                <hr>
                <input type="submit" value="Balance la purée Marcel !" />

            </form>
        </div>

    </body>


</html>
