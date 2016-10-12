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


/**Tracking**/
$nlTracking = getTracking($_POST['source-tracking'],$_POST['medium-tracking'],$_POST['campaign-tracking'],$_POST['content-tracking']);

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
                    <p>Pour consulter la version en ligne <a id="url-generate" href="<?php echo $nlHead['url_newsletter']; ?>"> cliquer ici</a></p>
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
                        <p><?php echo $nlHead['baseline_nl']; ?></p>
                    </td>
                    <?php
                }
                ?>

                <td align="right">
                    <p>n°<?php echo $nlHead['numero_nl']; ?><br><?php echo $nlHead['date_nl']; ?></p>
                </td>
            </tr>
        </table>
        <!-- fin du head -->
        <!-- Affichage du contenu -->

        <!--A jumeler avec le js ajouter un ligne pour répéter ce code autant de fois que nécessaire-->
        <table width="800px" style="background:<?php echo $nlContent['color']; ?>;  margin:0 auto;" >
            <?php
            $ii = 0;
            while ($ii < $nlContent['row']) {
                $ii++;
                ?>

                <tr>
                    <?php
                    $i = 0;
                    while ($i != $nlContent['bloc'] )
                    {
                        $numbloc = $i+1;
                        echo '<td> <h3>Bloc n°'.$numbloc.'</h3>Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.</td>';
                        $i++;
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
                <td><p>Pour vous désinscrire <a href="<?php echo $nlFooter['url_unsuscribe']; ?>">cliquer ici</a></p></td>
            </tr>
        </table>


    </div>
</div>

    <div id="edit" style="width:30%;float:left;background:#DDD; padding:15px;">
        <h2>Edition</h2>
        <p>Version en ligne :</p>
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

        <p>Feature en attente : Telecharger le code</p>
        <script>

            function editionUrl() {
                //console.log("clic !");
                var textQuiVaBien = document.getElementById('url-nl').value;
                console.log(document.getElementById('url-nl').value);
                document.getElementById("url-generate").href = textQuiVaBien;
            }

            function edition(theId, destination, attribute) /** id de la value a recupérer, cible ou injecter le contenu, attribut html a modifier **/ {
                var textQuiVaBien = document.getElementById(theId).value;
                console.log(document.getElementById(theId).value);
                document.getElementById(destination).setAttribute(attribute,textQuiVaBien);
            }

            /****Appel de la fonction editionURL ****/
            var urlElt = document.getElementById("url");
            urlElt.addEventListener("click", editionUrl);

            /****Appel de la fonction edition ****/
            var logoElt = document.getElementById("logo");
            logoElt.addEventListener("click", function(){
                edition("logo-nl","nl-logo","src");
            });

        </script>
    </div>

</body>
</html>
