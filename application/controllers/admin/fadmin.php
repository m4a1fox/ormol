<?php

class Fadmin extends Controller{
    public function __construct() {
        parent::__construct();
        $this->library('downloadfile');
        $this->model('get_db');
        MOUNT::$JS = array('views/admin/js/init.js', 'views/admin/js/func.js');
    }
    
    
    public function Index(){
        $data['content'] = $this->get_db->selectMulti('folio');
        
        if(isset($_POST['send'])){
            $config['image'] = $_FILES['file'];
            $config['folder'] = 'file/data';
            $config['smallWH'] = array(200, 200);
            $this->downloadfile->initialize($config);
            $yes = $this->downloadfile->MoveImage();
            echo '<pre>'.print_r($yes, 1).'</pre>';
            exit;
             $this->get_db->insert1(array(
                    'title' => $_POST['title'], 
                    'dev_time' => $_POST['dev-time'],
                    'platform' => $_POST['platform'],
                    'link' => $_POST['link'],
                    'description' => $_POST['description'],
                    'img' => $yes['image'],
                    'img_s' => $yes['small_image']
                    ), 'folio');
                header("Location: /fadmin");
        }
        
        
        
        
        
        
        $this->view("admin/fadmin/index", $data);
    }
    
    function delete($id){
            $this->get_db->delete1(array('id'=>$id), 'folio');
            header("Location: /fadmin");
        }
    
}