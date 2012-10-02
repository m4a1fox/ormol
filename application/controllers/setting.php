<?php

    class Setting extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function Index(){
            $this->view('setting/index');
        }
        
    }