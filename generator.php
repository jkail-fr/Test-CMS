<?php
require_once("includes/includes.php");



/**** Data retrieval ... ca peut servir***/

/**General**/
$nlGeneral = getGeneral($_POST['color-body'],$_POST['police']);

/**Header**/
$nlHead = getHead($_POST['url-nl'],$_POST['numero-nl'],$_POST['baseline'],$_POST['date-nl']);


/**Contenu**/
$nlContent = getContent($_POST['color-container'],$_POST['bloc-number'],$_POST['row-number']);
/*$color_container = $_POST['color-container'];
$bloc_number = $_POST['bloc-number'];
$row_number = $_POST['row-number'];*/


/**Footer**/
$nlFooter = getFooter($_POST['url-unsuscribe']);



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Generation de newsletter</title>
</head>
<body>
<div class="row">
    <div id="result" style="float:right;width:65%; border-left:2px solid black;">
        <div id="body" style="background:<?php echo $nlGeneral['color']; ?>;font-family: <?php echo $nlGeneral['police_nl']; ?>">

        <!--Affichage du lien URL -->
        <table  width="800px" style="/*background:<?php echo $nlContent['color']; ?>;*/ margin:0 auto; text-align:center;" >
            <tr>
                <td>
                    <p>Pour consulter la version en ligne <a id="url-generated" href="<?php echo $nlHead['url_newsletter']; ?>"> cliquer ici</a></p>
                </td>
            </tr>
        </table>

        <!-- Affichage du head -->
        <table width="800px" style="background:<?php echo $nlContent['color']; ?>;  margin:0 auto;" >
            <tr>
                <td>
                    <p><img id="nl-logo" src="<?php /*echo $nl_logo;*/ ?>" alt="logo"/></p>
                </td>

                <?php
                if (isset($nlHead['baseline_nl']))
                {
                    ?>
                    <td>
                        <p id="baseline-generated"><?php echo $nlHead['baseline_nl']; ?></p>
                    </td>
                    <?php
                }
                ?>

                <td align="right">
                    <p><span id="numero-generated">n°<?php echo $nlHead['numero_nl']; ?></span><br><span id="date-generated"><?php echo $nlHead['date_nl']; ?></span></p>
                </td>
            </tr>
        </table>
        <!-- fin du head -->
        <!-- Affichage du contenu -->

        <!--A jumeler avec le js ajouter un ligne pour répéter ce code autant de fois que nécessaire-->
        <table width="800px" style="background:<?php echo $nlContent['color']; ?>;  margin:0 auto;" >
            <?php
            $ii = 0;
            $bloc_id=1;
            while ($ii < $nlContent['row']) {
                $ii++;
                ?>

                <tr>
                    <?php
                    $i = 0;
                    while ($i != $nlContent['bloc'] )
                    {
                        $numbloc = $i+1;
                        echo '<td> <h3 id="titre'.$bloc_id.'">Bloc n°'.$bloc_id.'</h3><p id="content'.$bloc_id.'">Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.</p></td>';
                        $i++;
                        $bloc_id++;
                    }
                    ?>

                </tr>
                <?php
                ; }
            ?>
        </table>

        <!-- fin du contenu -->
        <!-- Affichage du footer-->

        <table  width="800px" style="/*background:<?php echo $nlContent['color']; ?>;*/  margin:0 auto; text-align:center;" >
            <tr>
                <td><p>Pour vous désinscrire <a id="unsuscribe-generated" href="<?php echo $nlFooter['url_unsuscribe']; ?>">cliquer ici</a></p></td>
            </tr>
        </table>


    </div>
</div>

    <div id="edit" style="width:30%;float:left;background:#DDD; padding:15px;">
        <h2>Edition</h2>
        <h3>Version en ligne :</h3>
        <input type="url" name="url-nl" id="url-nl" placeholder="URL de la newsletter" /><button id="url">Modifier</button>
        <hr>
        <input type="url" name="logo-nl" id="logo-nl" placeholder="URL du logo" /><button id="logo">Modifier</button>
        <hr>
        <input type="text" name="baseline-nl" id="baseline-nl" placeholder="Baseline" /><button id="baseline">Modifier</button>
        <hr>
        <input type="text" name="numero-nl" id="numero-nl" placeholder="Numéro de la newsletter" /><button id="numero">Modifier</button>
        <hr>
        <input type="text" name="date-nl" id="date-nl" placeholder="Date" /><button id="date">Modifier</button>
        <hr>
        <input type="url" name="unsuscribe-nl" id="unsuscribe-nl" placeholder="URL de désinscription" /><button id="unsuscribe">Modifier</button>
        <hr>
        <h3>Edition des blocs</h3>
        <label for="blocnumber">Choix du bloc : </label><input type="number" min="1" max="<?php echo $bloc_id-1; ?>" id="blocnumber" placeholder="numéro du bloc" /><br>
        <label for="bloctitle">Titre bloc : </label><input type="text" placeholder="Titre du bloc" id="bloctitle" /><br>
        <label for="bloccontent">texte du bloc : </label><textarea id="bloccontent" rows="4" cols="50">Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.</textarea><br>
        <button id="blocmodify">Modifier</button>

        <hr>
        <h3>Tracking Google analytics</h3>
        <label for="source-tracking">Nom de la source :</label>
        <input type="text" placeholder="Newsletter" name="source-tracking" id="source-tracking" /><br>
        <label for="medium-tracking">Nom du medium :</label>
        <input type="text" placeholder="ex : email" name="medium-tracking" id="medium-tracking" /><br>
        <label for="campaign-tracking">Nom de la campagne :</label>
        <input type="text" placeholder="Nom de la campagne" name="campaign-tracking" id="campaign-tracking" /><br>
        <label for="content-tracking">Content :</label>
        <input type="text" placeholder="Contenu" name="content-tracking" id="content-tracking" /><br>
        <button id="urlRewritting">Changer les URLs</button>
        <hr>
        <p>Feature en attente : Telecharger le code</p>
        <script src="includes/function.js">
        </script>
    </div>

</body>
</html>
