<?php

    class FAQ extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function Index(){
            $this->view('faq/index');
        }
        
    }