<?php

    class Download extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function Index(){
            $this->view('download/index');
        }
        
    }