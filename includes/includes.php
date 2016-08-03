<?php
/**
 * Created by PhpStorm.
 * User: jkail
 * Date: 26/07/2016
 * Time: 13:20
 */

/**
 * Gestion des polices
 */
$polices = array (
    'arial' => 'Arial, "sans-serif"',
    'verdana' => 'verdana, "sans-serif"',
    'courrier' => '"Courrier New", "sans-serif"',
    'trebuchet' => '"Trebuchet MS", "sans-serif"',
    'helvetica' => 'helvetica, "sans-serif"',
    'times' => '"Times New Roman", "sans-serif"');

/*
 * Fonction pour récupérer les données du header
 */

function getHead()
{
    $arrayHead = array (
    'url_newsletter' => $_POST['url-nl'],
    'numero_nl' => $_POST['numero-nl'],
    'baseline_nl' => $_POST['baseline'],
    'date_nl' => $_POST['date-nl']);
    return $arrayHead;

}