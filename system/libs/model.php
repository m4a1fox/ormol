<?php
class Model{
    
    public static $_db;

    function __construct(){
        $this->db = Registry::get('DB');
    }
    
}