<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $GLOBALS["config"] = array(
        "appName" => "phpSteroid",
        "version" => "0.0.1",
        "domain" => "phpsteroid.com",
        "cache_enabled" => true,
        "path" => array(
            "app" => "app/",
            "cache" => "caches/",
            "core" => "core/",
            "session" => "app/sessions", //no trailing forwardslash for session
            "basePath" => "/", //no trailing forwardslash
            "index" => "index.php"
        ),
        "defaults" => array(
            "controller" => "main",
            "method" => "index"
        ),
        "routes" => array(),
        "database" => array(
            "host" => "",
            "username" => "",
            "password" => "",
            "name" => ""
        )
    );
    date_default_timezone_set("America/Chicago");
    $GLOBALS["instances"] = array();
    require_once $GLOBALS["config"]["path"]["core"]."autoload.php";
    new router();
?>