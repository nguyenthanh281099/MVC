<?php
namespace Thanh;

class Router
{
    // $url= '/mvc/'
    static public function parse($url, $request)
    { 
        //trim() loai bo  ky tu trang 2 dau cua chuoi
        $url = trim($url);

        if ($url == "/mvc/")
        {
            $request->controller = "tasks";
            $request->action = "index";
            $request->params = [];
        }
        else
        { 
            //neu url='/mvc/tasks/create/' explode_url = ['mvc', 'tasks', 'create']
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }

    }
}
