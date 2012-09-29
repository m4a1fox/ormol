<?php

class Bootstrap{
    
    public $fileName;
    public $dir;
    
    function __construct(){
        
        
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode("/", $url);
        
        
        if(empty($url[0])){
            //include './controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        $fileName = $url[0];
        
        $filePath = $this->getFilePath($fileName);
        
        if(file_exists($filePath)){
            require $filePath;
        }else{
           M4A1_Exception::exception_error(new Exception('View is not exists'), viewIsNotExistInClass($fileName));
        }
       
        $controller = new $fileName;
        
        if(isset($url[2])){
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                M4A1_Exception::exception_error(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
            }
        }else{
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                }else{
                    M4A1_Exception::exception_error(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
                }
            }else{
                if(method_exists($controller, 'index')){
                    $controller->index();    
                }else{
                    M4A1_Exception::php_error(new Exception('Method not exists'), methodIsNotExistInClass('Index', $file));
                }
            }
        }
    }
    
        /**
     * 
     * @param type $file // file name
     * @return type realpath to contr.
     * methods: $this->dir->getSubPathName()    - return path to file, together with directory, if file is in
     *          $this->dir->getFilename()       - return filename
     *          $this->dir->getSubPath()        - return folder in wich file is
     *          $this->dir->key()               - real path to file
     */
    
    public function getFilePath($file){
        $this->fileName = $file;
        $fullPath = NULL;
        
        $this->dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(M4A1_CONTR), TRUE);
        while($this->dir->valid()) {
            if (!$this->dir->isDot() && $this->dir->getFilename() == $this->fileName.'.php'){
                $fullPath = $this->dir->key();
            }
            $this->dir->next();
        }
        return $fullPath;
    }
}