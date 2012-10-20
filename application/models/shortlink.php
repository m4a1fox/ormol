<?php 
    class Shortlink extends Controller{
        
        public static $link;
        
        function __construct() {
            parent::__construct();
            $this->model('get_db');
            self::$link = $this->get_db->selectMulti('content', 'position', 'ASC');
        }   
        
        public static function allLink(){
            new self;
            return self::$link;
        }  
    }
    
