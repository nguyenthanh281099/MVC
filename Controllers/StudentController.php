<?php
namespace Thanh\Controllers;

use Thanh\Core\Controller;
use Thanh\Models\StudentModel;
use Thanh\Models\StudentRepository;
use Thanh\Models\StudentResourceModel;

class StudentController extends Controller
{
    function index()
    {

        $Student = new StudentRepository();
        $d['student'] = $Student->showAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["sinhvien_name"]))
        {
            $Student= new StudentRepository();
            
            $model= new StudentModel();
            $model->setStudent_name($_POST["sinhvien_name"]);

            if ($Student->add($model))
            {
                header("Location: " . WEBROOT . "student/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    { 
        $Student= new StudentRepository();
        $d["Student"] = $Student->get($id); 
    
        if (isset($_POST["sinhvien_name"]))
        {
            $model = new StudentModel();
            $model->setId($id);
            $model->setStudent_name($_POST["sinhvien_name"]);
            
     
            if ($Student->edit($model))
            {
                header("Location: " . WEBROOT . "student/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {

        $Student = new StudentRepository();
        $Student1 = new StudentModel();
        $Student1->setId($id);

        if ($Student->delete($Student1))
        {
            header("Location: " . WEBROOT . "Student/index");
        }
    }
}
