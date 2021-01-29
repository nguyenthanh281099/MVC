<?php

namespace Thanh\Models;

use Thanh\Models\TaskResourceModel;
use Thanh\Models\TaskModel;

class TaskRepository
{
    public $taskrepo;
    public function __construct()
    {
        return $this->taskrepo = new TaskResourceModel();
    }

    public function add($model)
    {
        return $this->taskrepo->save($model);
    }

    public function edit($model)
    {
        return $this->taskrepo->save($model);
    }

    public function get($id)
    {
        return $this->taskrepo->find($id);
    }
     
    public function delete($model)
    {
        return $this->taskrepo->delete($model);
    }

    public function showAll()
    {
        return $this->taskrepo->show();
    }

}
