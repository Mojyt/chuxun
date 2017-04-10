<?php
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