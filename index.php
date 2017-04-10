<?php
<<<<<<< HEAD
define('VIEW','App/views/');
define('CONTROLLER','App/controller/');
define('MODEL','App/model/');
define('CSS_PATH','/Static/css/');
define('JS_PATH','/Static/js/');
define('IMG_PATH','/Static/img/');
define('FONT_PATH','/Static/fonts/');

require 'core/framework.php';
require 'core/dbpdo.php';
require 'core/common.php';

\core\Framework::start();
=======
define('CONTROLLER', 'App/controller/');
define('MODEL', 'App/model/');
define('VIEWS', 'App/views/');
define('CSS_PATH', '/Static/css/');
define('JS_PATH', '/Static/js/');
define('FONT_PATH', '/Static/fonts/');
define('MUSIC_PATH', '/Static/musics/');
define('IMG_PATH', '/Static/images/');

require 'Core/common.php';
//require '/DBPdo.php';
require 'Core/Framework.php';

\Core\Framework::start();

>>>>>>> ff6798f4fd63382c7af80a2b4b71f52ba97af8cb
