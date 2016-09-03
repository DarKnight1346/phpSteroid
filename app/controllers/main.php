<?php
    class main extends controller implements controllerInterface{
        
        function index(){
            load::view("main::index");
        }
        
    }
?>