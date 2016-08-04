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
 * Fonction pour récupérer les données du general
 */

function getGeneral($color,$police)
{
    $arrayGeneral = array (
        'color' => $color,
        'police_nl' => $police);
    return $arrayGeneral;
}

/*
 * Fonction pour récupérer les données du header
 */

function getHead($url,$numero,$baseline,$date)
{
    $arrayHead = array (
    'url_newsletter' => $url,
    'numero_nl' => $numero,
    'baseline_nl' => $baseline,
    'date_nl' => $date);
    return $arrayHead;
}

/*
 * Fonction pour récupérer les données du contenu
 */
function getContent($color,$bloc,$row)
{
    $arrayContent = array (
        'color' => $color,
        'bloc' => $bloc,
        'row' => $row);
    return $arrayContent;
}


/*
 * Fonction pour récupérer les données du footer
 */
function getfooter ($unsuscribe)
{
    $arrayFooter = array (
        'url_unsuscribe' => $unsuscribe);
    return $arrayFooter;
}

/*
 * Fonction pour récupérer les données du tracking
*/

function getTracking($source,$medium,$campaign,$content)
{
    $arrayTracking = array (
        'source' => $source,
        'medium' => $medium,
        'campaign' => $campaign,
        'content' => $content);
    return $arrayTracking;
}