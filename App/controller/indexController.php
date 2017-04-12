<?php
namespace App\controller;
<<<<<<< HEAD
use core\Framework;

class indexController extends Framework{
    public function index(){
        $this->display('default/search.html');
//        include 'default/search.html';
    }
}
use Core\Framework;
=======

use cord\Framework;


>>>>>>> 07eee180e8b60f954343231cdb248a573a5013bc

class indexController extends Framework
{
    //闪屏
    public function splash(){
        $this->display('');
    }
    //首页
    public function index(){
        $this->display('default/yd/index.html');
    }
    //登录
    public function login(){
        $this->display('');
    }
    //注册
    public function register(){
        $this->display('');
    }
    //搜索首页
    public function search(){
        $this->display('default/GE/search.html');
    }
    //私人订制
    public function tailor(){
        $this->display('');
    }
    //个人中心
    public function personal(){
        $this->display('default/wzj_personal/personal.html');
    }
    public function follow(){
        $this->display('default/wzj_personal/follow.html');
    }
    public function follow_detail(){
        $this->display('default/wzj_personal/follow_detail.html');
    }
    //旅游圈
    public function travel(){
        $this->display('');

    }
}
<<<<<<< HEAD
=======

>>>>>>> 07eee180e8b60f954343231cdb248a573a5013bc
