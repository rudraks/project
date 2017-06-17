<?php

if(isset($_GET["_display_errors_"])){
    error_reporting(E_ALL & ~E_DEPRECATED);
} else {
    ini_set('display_errors', 0);
    ini_set('error_reporting', 0);
    error_reporting(0);
}

require("./lib/autoload.php");
require_once("./lib/rudrax/boot/RudraX.php");

function controller_exception_handler($exception) {
    echo "Uncaught exception: " , $exception->getMessage(), "\n";
}

try {
    RudraX::invoke(array(
        'RX_MODE_MAGIC' => TRUE,
        'RX_MODE_DEBUG' => FALSE,
        'PROJECT_ROOT_DIR' => __DIR__."/"
    ));
} catch(Exception $e){
    controller_exception_handler($e);
}
