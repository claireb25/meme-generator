<?php

// //Rounting

// if (isset($_GET['action'])){
    
//     switch ($_GET['action']) { 
        
//     //routeur

//     case 'browse':
//     require_once('controllers/ctrlBrowse.php');
//     break;

//     case 'create':
//     require_once('controllers/ctrlCreate.php');

//     break;

//     case 'meme-generator/homepage':
//     require_once('controllers/ctrlHomepage.php');
//     break;
    

//     default:

//     require_once('error.html');
    

//     }
// } else {
//     require_once('controllers/ctrlBrowse.php');
// }
    //include("controllers/ctrlCreate.php");



 
$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);

switch($path){
    case "/meme-generator/":
    case "/meme-generator/homepage":
    case "/meme-generator" :
        require('controllers/ctrlHomepage.php');
        break;
    case "/meme-generator/create":
        require('controllers/ctrlCreate.php');
        break;
    case "/meme-generator/browse":
        require('controllers/ctrlBrowse.php');
        break;
    case "/meme-generator/browse/meme":
        require('controllers/ctrldownload.php');
        break;

}
    // case "/filmorama/genre":
    //     require('controllers/ctrlgenre.php');
    //     break;
    // case "/filmorama/annee":
    //     require('controllers/ctrlyear.php');
    //     break;
    // case "/filmorama/personne":
    //     require('controllers/ctrlPersonne.php');
    //     break;
    // case (preg_match("#/filmorama/?query=*#",$path)):
    //     require('controllers/ctrlResearch.php');
    //     break;
    // case "/filmorama/search":
    //     require('controllers/ctrlResearch.php');
    //     break;
    // default :
    //     require('controllers/404.php');
// }


// ?>