-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 03 2012 г., 14:02
-- Версия сервера: 5.5.25a
-- Версия PHP: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ormol`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', '0c800f4444be6e3c0eaece64829409fc');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_d` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_k` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `position`, `title`, `link`, `tag`, `meta_d`, `meta_k`, `content`, `date`, `time`) VALUES
(7, 4, 'Captcha', 'captcha', 'Captcha', 'Captcha', 'Captcha', '       123123123 Captcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha', '2012-08-18', '17:12:09'),
(8, 3, 'Download', 'download', 'Download', 'Download', 'Download', '<h2>Использование на странице.</h2>\r\n<p>В конструкторе класса необходимо вызвать метод (library), в аргумент ему передать название необходимой библиотеке (downloadfile). После чего она становится доступна в классе. К примеру:</p>\r\n<div class="code">\r\n<p><strong>&nbsp; &nbsp; </strong>public function __construct(){</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; parent::__construct();</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;library(''downloadfile'');</p>\r\n<p>&nbsp; &nbsp; }</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>В методе где необходимо использовать загрузку файлов, необходимо добавить настройки для корректной работы загрузчика. К примеру:</p>\r\n<div class="code">\r\n<p>&nbsp; &nbsp; $config[''image''] = $_FILES[''file''];</p>\r\n<p>&nbsp; &nbsp; $config[''folder''] = ''./file/'';</p>\r\n<p>&nbsp; &nbsp; $config[''smallWH''] = array(300, 300);</p>\r\n</div>\r\n<p><span style="background-color: rgb(255, 255, 255); "><span style="color: rgb(0, 0, 0); ">Важно</span></span>: ключи в массиве $config должны быть такими как на примере. Значение ключей:</p>\r\n<p><em>$config[''image'']</em> - сюда передается собственно сайм файл из фомы, где ключ суперглобального массива $_FILES есть название поля типа file.</p>\r\n<p><em>$config[''folder'']</em> - сюда перердается относительный путь до папки, в которую будут закачиваться картинки.</p>\r\n<p><em>$config[''smallWH'']</em> - сюда передаются значение Ширины(W) и высоты(H) создание миниатюры. Если ключа <strong>smallWH</strong> не существует в массиве <strong>$config,</strong> то миниатюра не будет создана.</p>\r\n<p>&nbsp;</p>\r\n<p>После того, как сформирован массив с конфигурационными данными, необходимо вызвать функцию инициализации (initialize($arr)) класса <strong>DownloadFile.&nbsp;</strong>В аргумент этой функции необходимо передать массив с настройками.&nbsp;Пример использования:</p>\r\n<div class="code">\r\n<p>&nbsp; &nbsp; $this-&gt;downloadfile-&gt;initialize($config);</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>После, достаточно вызвать метод MoveImage() из класса DownloadFile и файл будет закачен. Пример использования:</p>\r\n<div class="code">\r\n<p>&nbsp; &nbsp; $this-&gt;downloadfile-&gt;MoveImage();&nbsp;</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>В ответ метод вернет массив с 2 элементами. 1. [<strong>image</strong>] - путь к картинке. 2. [<strong>small_image</strong>] - путь к миниатюре.</p>', '2012-08-14', '17:36:40'),
(10, 1, 'Database', 'database', 'Database, Download', 'Data, Dowload', 'Data, Download', '<p>Подключение к БД(база данных), происходит в файле конфигурации, который расположен по пути - ./system/config/database.php.</p>\r\n<p>Исходный код для простоты понимания.</p>\r\n<div class="code">\r\n<p>&nbsp;</p>\r\n<p><!--?php</p--></p>\r\n<p>$db[''default''][''dbdriver''] &nbsp;= ''''; // к примеру &quot;mysql&quot;</p>\r\n<p>$db[''default''][''hostname''] &nbsp;= ''''; // к примеру &quot;localhost&quot;</p>\r\n<p>$db[''default''][''dbname''] &nbsp; &nbsp;= ''''; // к примеру &quot;mydb&quot;</p>\r\n<p>$db[''default''][''username''] &nbsp;= ''''; // к примеру &quot;root&quot;</p>\r\n<p>$db[''default''][''password''] &nbsp;= ''''; // Если пароля доступа нет - то оставляем пустым</p>\r\n<p>$db[''default''][''char_set''] &nbsp;= ''utf8''; // как правило, я использую ее.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<p>&nbsp;Так как <span style="background-color: rgb(0, 255, 0); ">ORMOL</span> использует для работы в СУБД PDO то в настройках необходимо вписать следующие данные:</p>\r\n<p>&nbsp;</p>', '2012-08-15', '19:20:29'),
(17, 2, 'Paginator', 'paginator', 'пагинатор, paginator, sql, mysql', '', '', '<p><span style="font-family: HelveticaLTStdRoman, Arial, Helvetica, sans-serif; font-size: 13px; ">В конструкторе класса необходимо вызвать метод (library), в аргумент ему передать название необходимой библиотеке (paginator). После чего она становится доступна в классе. К примеру:</span></p>\r\n<div class="code">\r\n<p><strong>&nbsp; &nbsp; </strong>public function __construct(){</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; parent::__construct();</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; $this-&gt;library(''paginator'');</p>\r\n<p>&nbsp; &nbsp; }</p>\r\n</div>\r\n<p>&nbsp;Далее, необходимо объявить ассоциативный массив с ключами-настроками.</p>\r\n<p>&nbsp;</p>', '2012-10-11', '12:08:12');

-- --------------------------------------------------------

--
-- Структура таблицы `folio`
--

CREATE TABLE IF NOT EXISTS `folio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dev_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `platform` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `img` tinytext CHARACTER SET utf8 NOT NULL,
  `img_s` tinytext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `folio`
--

INSERT INTO `folio` (`id`, `title`, `dev_time`, `platform`, `link`, `description`, `img`, `img_s`) VALUES
(3, 'CUMC', '2 month', 'Wordpress', 'cumc', 'Department of Obstetrics and Gynecology', './file/GLKmRT2zf7.png', './file/GLKmRT2zf7_s.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(1, '67567'),
(2, 'ghjkghjk'),
(3, 'ghjkghjk'),
(4, 'sdfgsdfg'),
(5, 'sdfgsdfg'),
(6, 'sdfgsdfg'),
(7, 'sdfgsdfgdg'),
(8, 'sdfgsdfg'),
(9, 'sdfgsdfg'),
(10, 'sdfgsdfg'),
(11, 'sdfgsdfg'),
(12, 'sdfgsdfg444444444444'),
(13, 'asdasd'),
(14, '123'),
(15, 'fsdfsdf'),
(16, '111zcxdd'),
(17, 'a2224444'),
(18, '543'),
(19, 'sdfgsfdgsdfg'),
(20, 'sdfgsdfgsdfg'),
(21, 'sdfgsdfgsdfg'),
(22, 'sdfgsdfg'),
(23, 'sdfgsdfgsdfg'),
(24, 'sdfgdsfgsdfg'),
(25, 'sdfgsdfgsdfg'),
(26, '34523452345'),
(27, '2352352345'),
(28, '234523452345'),
(29, '2345234235345'),
(30, '23452362345'),
(31, '2345234512341345'),
(32, 'dgh dgh gf'),
(33, 'fhjd fhg etew twert'),
(34, 'wer tw 43t wert 2543 5 '),
(35, 'wert t 43t ert rewt wert '),
(36, 'w ret 342 ert wert 425'),
(37, 'wet  325 4'),
(38, 'wert 234 '),
(39, 'wert wert wert'),
(40, 'wert wer twert '),
(41, 'wet  wret '),
(42, 'wert  43wt wert '),
(43, 'wert 43wt ret wert'),
(44, 'w ret wert'),
(45, 'wert 23tw ret wert'),
(46, 'wert w43t retw ret wert'),
(47, 'wer tw43t ret et'),
(48, 'wert  w43t wert'),
(49, 'wert w t4tre t'),
(50, 'wert wtw ret'),
(51, 'wertw43t rewt wert'),
(52, 'wert w4 ert re twret'),
(53, 'wert w34tr wret'),
(54, 'wert w43tret wert'),
(55, 'wert wertw4 ewrt'),
(56, 'wertw4terwg w'),
(57, 'wert w34ert wre'),
(58, 'w rt wtret'),
(59, 'wertwert'),
(60, 'w345 2435 rewt wet'),
(61, 'w rtw43 ert wert'),
(62, 'wrt w t4t3 4wt43t'),
(63, 'wert wret'),
(64, 'wrtw 43t wret'),
(65, 'w retwert wert'),
(66, 'wert w4 ert'),
(67, 'wert w4wert'),
(68, 'wert w4wert wert');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
