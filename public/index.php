
<?php


if (isset($_GET['loc']) && !empty($_GET['loc'])) {
    $loc = $_GET['loc'];
} else {
    $loc = "home";
}
$title = $loc;
$fileName = "../struct/controler/";
switch ($loc) {

}

$fileName .= ".php";

if (file_exists($fileName)){
include_once $fileName;
}

include("../struct/vue/template.php");
