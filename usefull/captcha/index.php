<?php
session_start();
include '../../system/libs/session.php';
class Captcha{

    private     $imgBgRed;
    private     $imgBgGreen;
    private     $imgBgBlue;

    private     $imgTextRed;
    private     $imgTextGreen;
    private     $imgTextBlue;

    private     $captcha;
    private     $font;
    private     $width;
    private     $height;
    private     $image;
    private     $color;
    private     $bg;


    function __construct($width, $height, $font, $bg = array(), $text = array()) {
        
        $this->imgBgRed     = $bg['R'];
        $this->imgBgGreen   = $bg['G'];
        $this->imgBgBlue    = $bg['B'];

        $this->imgTextRed     = $text['R'];
        $this->imgTextGreen   = $text['G'];
        $this->imgTextBlue    = $text['B'];       

        $this->width    = $width;
        $this->height   = $height;
        $this->font     = $font;
        $this->image    = $this->createImg();
        $this->color    = $this->createImgColorText();
        $this->bg       = $this->createImgColorBg();
        
        $this->createImgFill();
        $this->createImgText();
    }
    
    function echoImg(){
        header("Content-type: image/png");
        return imagepng($this->image);
    }
    
    function char() {
        for ($i = 0; $i < 5; $i++) {
            $this->captcha .= chr(rand(97, 122));
        }
        Session::set('captcha', $this->captcha);
        return $this->captcha;
    }
    
    function createImg(){
        return imagecreatetruecolor($this->width, $this->height);
    }
    
    function createImgColorBg(){
        return imagecolorallocate($this->image, $this->imgBgRed, $this->imgBgGreen, $this->imgBgBlue);
    }
        
    function createImgColorText(){
        return imagecolorallocate($this->image, $this->imgTextRed, $this->imgTextGreen, $this->imgTextBlue);
    }
    
    function createImgFill(){
        return imagefilledrectangle($this->image, 0, 0, 200, 100, $this->bg);
    }
    
    function createImgText() {
        return imagettftext($this->image, 20, 10, 20, 30, $this->color, $this->font, $this->char());
    }
}

$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);

$font = glob('font/*.ttf');

$a = new Captcha(100, 40, $font[rand(0, count($font)-1)], array("R" => 255, "G" => 255, "B" => 255),  array("R" => $r, "G" => $g, "B" => $b));
$a->echoImg();
