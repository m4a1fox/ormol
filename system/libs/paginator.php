<?php

class Paginator{   
    private $id             = 1;            // Page on which the user is currently
    private $not_active_css = 'normalactive';           // Class of links where you are
    private $active_css     = 'normal';        // Class of links which is active
    private $link;          // Links to Page Navigator
    private $table;         // The selected table
    private $countRow;      // Counting all the required rows in the table
    private $per_page       = 3;      // How many pages will be on the right and left
    private $list_page      = 5;
    private $counts;        // Calculation of the necessary lines in the system
    private $begin;         // The beginning of the sample
    private $leftLink;
    private $rightLink;
    private $firstPage      = '&larr;';
    private $lastPage       = '&rarr;';

    function __construct(){}

    function initialize($param = array()){
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
        $this->countRow = Registry::get('DB')->query("SELECT COUNT(*) FROM `".$this->table."`")->fetchColumn();
    }
    
    function pageCount(){
    	if($this->countRow > 0)
            return ceil($this->countRow/$this->per_page);
        else
            return 1;
    }

    function begin(){
        return ($this->id-1)*$this->list_page;
    }
    
    

    public function paginate(){
        return '<div class="pagination"><ul>'.$this->fisrtPage().$this->leftLink().$this->nowPage().$this->rightLink().$this->lastPage().'</ul></div>';
    }
    
    public function getPage($where = '', $order = 'ORDER BY `id` DESC'){
        if($this->id <= $this->pageCount() && is_numeric($this->id)){
            return Registry::get('DB')->query("SELECT * FROM `".$this->table."` ".$where." ".$order."  LIMIT ".$this->begin().", ".$this->list_page)->fetchAll(PDO::FETCH_CLASS, "stdClass");
        }else{
            header("Location: ".$this->link);
            exit();
        }
    }


    private function fisrtPage(){
        if($this->id != 1)
            return '<li><a href="'.$this->link.'" class="'.$this->active_css.'">'.$this->firstPage.'</a></li>';
    }
    
    private function leftLink(){
        if($this->id > $this->per_page+1){
            for($i=$this->id-$this->per_page; $i<$this->id; $i++)
                $this->leftLink .= $this->activeLink($i);
        }else{
            for($i=1; $i<$this->id; $i++)
                $this->leftLink .= $this->activeLink($i);
        }
        return $this->leftLink;
    }
    
    private function nowPage(){
        return '<li><a class="'.$this->not_active_css.'" href="#">'.$this->id.'</a></li>';
    }
    
    private function rightLink(){
        if($this->id + $this->per_page < $this->pageCount()){
            for($i=$this->id+1; $i<=$this->id+$this->per_page; $i++)
                $this->rightLink .= $this->activeLink($i);
        }else{
            for($i=$this->id+1; $i<=$this->pageCount(); $i++)
                $this->rightLink .= $this->activeLink($i);
        }
        return $this->rightLink;
    }

    private function lastPage(){
        if($this->id != $this->pageCount())
            return '<li><a href="'.$this->link.$this->pageCount().'" class="'.$this->active_css.'">'.$this->lastPage.'</a></li>';
    }
    
    
    
    private function activeLink($dispaly){
        return '<li><a href="'.$this->link.$dispaly.'" class="'.$this->active_css.'">'.$dispaly.'</a></li>';
    }
    

}