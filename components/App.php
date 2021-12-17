<?php

class App{
    static function run($config){
        $path = "$_SERVER[DOCUMENT_ROOT]$_SERVER[REQUEST_URI]";
        $page = isset(self::getPage($config->root,$path)[0])?self::getPage($config->root,$path)[0]:"";
        
        echo method_exists('siteController',$page)?(siteController::$page()):siteController::index(); 
       
    }

    static function getPage($root,$path){
        $page = preg_split("/\//",str_replace($root,"",strtok($path,"?")),-1, PREG_SPLIT_NO_EMPTY);
        return $page;
    }

}

?>