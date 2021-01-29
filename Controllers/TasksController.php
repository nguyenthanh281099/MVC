<?php
namespace Thanh\Controllers;

use Thanh\Core\Controller;
use Thanh\Models\TaskModel;
use Thanh\Models\TaskRepository;
use Thanh\Models\TaskResourceModel;

class TasksController extends Controller
{
    function index()
    {

        $tasks = new TaskRepository();

        $d['tasks'] = $tasks->showAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $task= new TaskRepository();
            $model= new TaskModel;
            $model->setTitle($_POST["title"]);
            $model->setDescription( $_POST["description"]);

            if ($task->add($model))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    { 
        $task= new TaskRepository();

        $d["task"] = $task->get($id); 

        if (isset($_POST["title"]))
        {
            $model = new TaskModel();
            $model->setId($id);
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);
            if ($task->edit($model))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {

        $task = new TaskRepository();
        $task1 = new TaskModel();
        $task1->setId($id);

        if ($task->delete($task1))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
