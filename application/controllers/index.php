<?php

class Index extends Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function Index(){
        META::$TITLE = 'Home';
        $this->view('index/index');
    }
}
