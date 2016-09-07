<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $GLOBALS["config"] = array(
        "appName" => "phpSteroid",
        "version" => "0.0.1",
        "domain" => "phpsteroid.com",
        "cache_enabled" => false,
        "handlebars_enabled" => true,
        "handlebars_browser_handled" => true,
        "path" => array(
            "app" => "app/",
            "cache" => "caches/",
            "core" => "core/",
            "session" => "app/sessions", //no trailing forwardslash for session
            "basePath" => "/glusterfs/www/html/phpsteroid.com",
            "index" => "index.php"
        ),
        "defaults" => array(
            "controller" => "main",
            "method" => "index"
        ),
        "routes" => array(),
        "database" => array(
            "host" => "10.128.4.80",
            "username" => "phpsteroid",
            "password" => "tKzFv8KSs6Cmv32F",
            "name" => "phpsteroid"
        )
    );
    date_default_timezone_set("America/Chicago");
    $GLOBALS["instances"] = array();
    require_once $GLOBALS["config"]["path"]["core"]."autoload.php";
    new router();
?>