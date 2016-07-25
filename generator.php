<?php

/**** Data retrieval ... ca peut servir***/

/**General**/
$color_body = $_POST['color-body'];
$police = $_POST['police'];
    /**Traitement de la police**/



/**Header**/
$url_newsletter = $_POST['url-nl'];
$numero_nl = $_POST['numero-nl'];
$date_nl = $_POST['date-nl'];


/**Contenu**/

$color_container = $_POST['color-container'];
$bloc_number = $_POST['bloc-number'];


/**Footer**/
$url_unsuscribe = $_POST['url-unsuscribe'];

/**Tracking**/
$campaign_name = $_POST['campaign-name'];

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Generation de newsletter</title>
</head>

<body style="background:<?php echo $color_body; ?>;">

<!--Affichage du lien URL -->
  <table  width="800px" style="background:<?php echo $color_container; ?>; margin:0 auto;" >
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
        if (isset($baseline))
        {
        ?>
        <td>
            <p><?php echo $baseline; ?></p>
        </td>
        <?php
        }
        ?>

        <td>
            <p>n°<?php echo $numero_nl; ?><br><?php echo $date_nl; ?></p>
        </td>
    </tr>
</table>
<!-- fin du head -->
<!-- Affichage du contenu -->

<!--A jumeler avec le js ajouter un ligne pour répéter ce code autant de fois que nécessaire-->
<table width="800px" style="background:<?php echo $color_container; ?>;  margin:0 auto;" >
    <tr>
        <?php
        $i = 0;
        while ($i != $bloc_number )
        {
            $numbloc = $i+1;
            echo '<td> Bloc n°'.$numbloc.'</td>';
            $i++;
        }

        ?>
    </tr>
</table>

<!-- fin du contenu -->
<!-- Affichage du footer-->

<table  width="800px" style="background:<?php echo $color_container; ?>;  margin:0 auto;" >
    <tr>
        <td><p>Pour vous désinscrire <a href="<?php echo $url_unsuscribe; ?>">cliquer ici</a></p></td>
    </tr>
</table>

</body>

</html>
