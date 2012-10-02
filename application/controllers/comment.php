<?php

    class Comment extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function Index(){
            $this->view('comment/index');
        }
        
    }