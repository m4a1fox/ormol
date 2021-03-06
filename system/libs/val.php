<?php
class Val{
    public function __construct(){}

    public function minlength($data, $arg){
        if(strlen($data) < $arg)
            return "Your string can only be $arg long";
    }

    public function maxlength($data, $arg){
        if(strlen($data) > $arg)
            return "Your string can only be $arg long";
    }

    public function digit($data){
        if(ctype_digit($data) == false)
            return "Your string must be a digit";
    }

    public function required($data, $arg){
        if(!$data)
            return "The $arg is required";
    }
    
    public function captcha($data){
        if($data !== Session::get('captcha'))
            return 'The code is wrong';
    }
}