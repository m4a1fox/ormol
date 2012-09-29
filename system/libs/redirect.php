<?php

class Redirect extends Controller{
    
    static private $url;
    
    public function __construct($url) {
        self::$url = $this->view($url);
    }
    
    public static function go($url) {
        new self($url);
        return self::$url;
    }
    
}