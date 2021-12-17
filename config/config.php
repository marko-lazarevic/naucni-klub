<?php

class Config{
    public static function config(){ 
        return (object) array(
            "root"=> str_replace("\\","/",dirname(__FILE__,2)),
            "lang" => "sr",
    );}

    public static function getSitePages(){
        return (object) array(
            "index" => (object) array(
                "controller" => "index",
            ),
            "test" => (object) array(
                "controller" => "test",
            )
        );
    }
}



?>