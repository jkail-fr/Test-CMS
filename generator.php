<?php
include_once("/includes/includes.php");



/**** Data retrieval ... ca peut servir***/

/**General**/
$color_body = $_POST['color-body'];
$police = $_POST['police'];
    /**Traitement de la police**/



/**Header**/
getHead();
//$url_newsletter = $_POST['url-nl'];
//$numero_nl = $_POST['numero-nl'];
//$date_nl = $_POST['date-nl'];


/**Contenu**/

$color_container = $_POST['color-container'];
$bloc_number = $_POST['bloc-number'];
$row_number = $_POST['row-number'];


/**Footer**/
$url_unsuscribe = $_POST['url-unsuscribe'];

/**Tracking**/
$source_tracking = $_POST['source-tracking'];
$medium_tracking = $_POST['medium-tracking'];
$campaign_name = $_POST['campaign-tracking'];
$content_tracking = $_POST['content-tracking'];

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Generation de newsletter</title>
</head>

<body style="background:<?php echo $color_body; ?>;/*font-family: <?php echo $police; ?>*/">
<?php
var_dump($arrayHead);
?>

<!--Affichage du lien URL -->
  <table  width="800px" style="/*background:<?php echo $color_container; ?>;*/ margin:0 auto; text-align:center;" >
      <tr>
          <td>
              <p>Pour consulter la version en ligne <a href="<?php echo $url_newsletter; ?>"> cliquer ici</a></p>
          </td>
      </tr>
  </table>

<!-- Affichage du head -->
<table width="800px" style="background:<?php echo $color_container; ?>;  margin:0 auto;" >
    <tr>
        <td>
            <p><img src="<?php /*echo $nl_logo;*/ ?>" alt="logo"/></p>
        </td>

        <?php
        if (isset($arrayHead['baseline_nl']))
        {
        ?>
        <td>
            <p><?php echo $arrayHead['baseline_nl']; ?></p>
        </td>
        <?php
        }
        ?>

        <td align="right">
            <p>n°<?php echo $numero_nl; ?><br><?php echo $date_nl; ?></p>
        </td>
    </tr>
</table>
<!-- fin du head -->
<!-- Affichage du contenu -->

<!--A jumeler avec le js ajouter un ligne pour répéter ce code autant de fois que nécessaire-->
<table width="800px" style="background:<?php echo $color_container; ?>;  margin:0 auto;" >
    <?php
    $ii = 0;
    while ($ii < $row_number) {
        $ii++;
    ?>

    <tr>
        <?php
        $i = 0;
        while ($i != $bloc_number )
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

<table  width="800px" style="/*background:<?php echo $color_container; ?>;*/  margin:0 auto; text-align:center;" >
    <tr>
        <td><p>Pour vous désinscrire <a href="<?php echo $url_unsuscribe; ?>">cliquer ici</a></p></td>
    </tr>
</table>

</body>

</html>
