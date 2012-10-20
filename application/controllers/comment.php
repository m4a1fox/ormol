<?php

    class Comment extends Controller{
        
        public function __construct() {
            parent::__construct();
            $this->library(array('form', 'paginator'));
            $this->model('get_db');
            MOUNT::$JS = array('views/comment/js/comment.js');
        }
        
        public function Index($id=1){
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
        
        function page($id = 1){
            $this->index(!empty($id)?$id:1);
        }
    }