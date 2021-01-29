<?php
namespace Thanh\Models;

use Thanh\Models\StudentResourceModel;

class StudentRepository
{
    public $svRepo;

    public function __construct()
    {
        return $this->svRepo = new StudentResourceModel();
    }

    public function add($model)
    {
        return $this->svRepo->save($model);
    }

    public function delete($model)
    {
        return $this->svRepo->delete($model);
    }

    public function edit($model)
    {
        return $this->svRepo->save($model);
    }

    public function showAll()
    {
        return $this->svRepo->show();
    }
    public function get($id)
    {
        return $this->svRepo->find($id);
    }
}
