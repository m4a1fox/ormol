<?php
    class Help extends Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        function Index(){
            
            
            $this->view('help/index');
        }
        
        
    }


?>