<?php

$fileName = "../struct/vue/";

switch ($loc) {
        case "home":
            $fileName .= "home";
                break;
        case "monCompte":
                $fileName .= "monCompte";
                break;
        case "livres":
                $fileName .= "livres";
                break;
        case "musiques":
                $fileName .= "musiques";
                break;
        case "film":
                $fileName .= "film";
                break;
        case "trouver":
                $fileName .= "trouver";
                break;
        case "contact":
                $fileName .= "contact";
                break;
        default:
                $fileName .= "404";
                break;
}

$fileName .= ".php";
        
include_once $fileName;
 ?>