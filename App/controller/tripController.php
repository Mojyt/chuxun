<?php

namespace App\controller;

use Core\Framework;

class tripController extends Framework
{
    public function index()
    {
//        $this->redirect('trip/adjust');
        $this->display('trip/setting_up.html');
    }

    public function adjust()
    {
        $this->display('trip/adjust.html');
    }
}