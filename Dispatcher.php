<?php

namespace Thanh;

class Dispatcher
{

    private $request;

    public function dispatch()
    {   // tao 1 class request trong class Dispatch
        $this->request = new Request();
        //request->url='/mvc/', class request
        Router::parse($this->request->url, $this->request); 
        $controller = $this->loadController();
        //gọi hàm taskController
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = "Thanh\\Controllers\\". $this->request->controller . "Controller"; 
        //new tasksController();
        $controller = new $name();
        //$controller = new \Thanh\Controllers\SinhVienController();
        return $controller;
    }

}
?>