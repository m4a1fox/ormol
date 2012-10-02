<?php

    class Structure extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function Index(){
            $this->view('structure/index');
        }
        
    }