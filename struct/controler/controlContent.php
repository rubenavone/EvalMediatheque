<?php

$fileName = "../struct/vue/";

switch ($loc) {
        case "home":
            $fileName .= "home";
                break;
        case "monCompte":
                $fileName .= "monCompte";
                break;
        case "products":
                $fileName .= "products";
                break;
        case "trouver":
                $fileName .= "trouver";
                break;
        case "contact":
                $fileName .= "contact";
                break;
        case "compte":
                $fileName .= "compte";
                break;
        default:
                $fileName .= "404";
                break;
}

$fileName .= ".php";
        
include_once $fileName;
 ?>