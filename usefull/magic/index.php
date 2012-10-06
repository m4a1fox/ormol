<?php
session_start();
include '../../system/libs/session.php';
$fonts = glob('font/*.ttf');
// Это строка, которую мы будем рисовать на изображении
function char() {
    $captcha = '';
        for ($i = 0; $i < 5; $i++) {
            $captcha .= chr(rand(97, 122));
        }
        Session::set('captcha', $captcha); 
        return $captcha;
}


$str = char();

$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);


/* ** Здесь можно указать путь к своему шрифту ** $font = dirname(__FILE__) . '/MyriadPro-Bold.otf'; */
$font = $fonts[rand(0, count($fonts)-1)];
Session::set('font', $font);
/* ** Задаем углы закручивания ** и сдвиг, относительно центра перед закручиванием */ 
$corner1 = rand(30,50); 
$corner2 = rand(30,50); 
$roll = rand(20, 50); 
// Создаем объект 
$image = new Imagick(); 
$draw = new ImagickDraw();
$bg = new ImagickPixel('#ffffff');
$image->newImage(70, 30, $bg); 
/* ** Если используем свой шрифт, передаем его в ImageDraw ** $draw->setFont($font); */ 
// Задаем размер шрифта 
$draw->setFontSize(20); // Накладываем нашу надпись
$draw->setfillcolor('rgb('.$r.', '.$g.', '.$b.')');
//$draw->setstrokecolor('red'); // text stroke
$image->annotateImage($draw, 10, 23, 0, $str);
//Далее пошло уже закручивание изображения: сначала в одну сторону, потом в другую.

// Двигаем изображение и закручиваем его 
$image->rollImage($roll,0); 
$image->swirlImage(-$corner1); 
$image->rollImage(-$roll*2,0); 
$image->swirlImage($corner2); 
$image->rollImage($roll,0);

//$image->blurimage(1, 4); // blur text
//Ну и собственно, выдача:

$image->setImageFormat('png'); 

header('Content-type: image/png'); 
echo $image;