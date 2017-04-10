<?php
namespace core;
class Framework
{
    public $arr;
    public function redirect($url)
    {
        header('Location:' . $url);
    }
    public function session($k, $v)
    {
        session_start();
        $SESSION[$k] = $v;
    }
    public function assign($k, $v)
    {
        $this->arr[$k] = $v;
    }
    public function display($file)
    {
        $file=VIEW . $file;
        if (file_exists($file)) {
            if (!empty($this->arr)) {
                extract($this->arr);
            }
            include $file;
        } else {
            include  VIEW .'404.html';
        }
    }
    public function json($value)
    {
        header('Content-Type:text/json');
        echo json_encode($value);
    }
    public static function start()
    {
        $url = $_SERVER['REQUEST_URI'];
        $tmp = explode('/', explode('?', $url)[0]);
        $c = $tmp[1] . 'Controller';
        $m = isset($tmp[2]) ? $tmp[2] : 'search';
        $page = new $c();
        $page->$m();
//        $file= CONTROLLER . $c .'.php';
//        if(file_exists($file)){
//            require $file;
//            $t = '\\App\\controller\\' . $c;
//            if(class_exists($t) && method_exists($t,$m)){
//
//            }else{
//                include VIEW . '404.html';
//            }
//        }else{
//            include VIEW . '404.html';
//        }

    }
}