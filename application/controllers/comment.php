<?php

    class Comment extends Controller{
        
        public function __construct() {
            parent::__construct();
            $this->library(array('form', 'paginator'));
            $this->model('get_db');
            MOUNT::$JS = array('views/comment/js/comment.js');
        }
        
        public function Index($id=1){
            
            
            
            
            
           
            $data = $this->add(); 
            
            
            $config['id'] = $id;
            $config['link'] = M4A1_HOST.strtolower(__CLASS__).'/page/';
            $config['table'] = 'comment';
            $config['per_page'] = 2;
            $config['list_page'] = 4;
            $this->paginator->initialize($config);
            $data['comments'] = $this->paginator->getPage('', 'ORDER BY `id` DESC');
            $data['number'] = $this->paginator->paginate();

            $this->view('comment/index', $data);
        }
        
        public function add(){
            
            
            
            $val = array();
            if(isset($_POST['submit'])){
                
            $data = $this->form->post('name')
                               ->val('required', 'name')
                               ->post('comment')
                               ->val('required', 'comment')
                               ->post('date')
                               ->post('captcha')
                               ->val('captcha');
            
            $ret = $data->submit() == 1 ? $data->fetch() : $data->submit();
            
            Session::set('name', $_POST['name']);
            Session::set('comment', $_POST['comment']);
            
            
            if(isset($ret['error'])){
                    foreach ($ret as $key => $value) {
                        $val[$key] = $value;
                    }
                return $val;
            }else{
                    $this->get_db->insert1(array(
                        'name' => $ret['name'],
                        'comment' => $ret['comment'],
                        'date' => $ret['date']),
                            'comment');
                    Session::destroy();
                    header("Location: /comment");
                }
            }
        }
        
        
        
        function page($id = 1){
            $this->index(!empty($id)?$id:1);
        }
        
        
        function removeComment(){
            $id = $_POST['id'];
            $this->get_db->delete1(array('id'=>$id), 'comment');
        }
        
    }