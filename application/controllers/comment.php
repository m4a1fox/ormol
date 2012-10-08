<?php

    class Comment extends Controller{
        
        public function __construct() {
            parent::__construct();
            $this->library('form');
            $this->model('get_db');
            MOUNT::$JS = array('views/comment/js/comment.js');
        }
        
        public function Index(){
            $data = array();
            
            
            
            
            if(isset($_POST['submit'])){
                $ret = $this->add();
                if(isset($ret['error'])){
                    foreach ($ret as $key => $value) {
                        $data[$key] = $value;
                    }
                }else{
                    $this->get_db->insert1(array(
                        'name' => $ret['name'],
                        'comment' => $ret['comment'],
                        'date' => $ret['date']),
                            'comment');
                }
            }
            
        $data['comments'] = $this->get_db->selectMulti('comment');

        $this->view('comment/index', $data);
        }
        
        public function add(){
            $data = $this->form->post('name')
                               ->val('required', 'name')
                               ->post('comment')
                               ->val('required', 'comment')
                               ->post('date')
                               ->post('captcha')
                               ->val('captcha');
            
            $data = $data->submit() == 1 ? $data->fetch() : $data->submit();

            
            return $data;
        }
    }