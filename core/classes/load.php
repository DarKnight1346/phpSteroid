<?php
    use Handlebars\Handlebars;
    class load{
        
        static function view($viewFile, $viewVars = array()){
            if($GLOBALS["config"]["handlebars_enabled"]){
                load::handlebarView($viewFile, $viewVars);
            }else{
                load::nativeView($viewFile, $viewVars);
            }
        }
        
        
        static function nativeView($viewFile, $viewVars = array()){
            extract($viewVars);
            $viewFileCheck = explode(".", $viewFile);
            if(!isset($viewFileCheck[1])){
                $viewFile .= ".php";
            }
            $viewFile = str_replace("::", "/", $viewFile);
            $filename = $GLOBALS["config"]["path"]["app"]."views/{$viewFile}";
            if(file_exists($filename)){
                require_once $filename;
            }else{
                die("Trying to Load Non Existing View");
            }
        }
        
        static function handlebarView($viewFile, $viewVars = array()){
            $viewFileCheck = explode(".", $viewFile);
            if(!isset($viewFileCheck[1])){
                $viewFile .= ".php";
            }
            $viewFile = str_replace("::", "/", $viewFile);
            $filename = $GLOBALS["config"]["path"]["app"]."views/{$viewFile}";
            if(file_exists($filename)){
                $engine = new Handlebars();
                echo $engine->render(file_get_contents($filename), $viewVars);
            }else{
                die("Trying to Load Non Existing Handlebar");
            }
        }
        
    }
?>