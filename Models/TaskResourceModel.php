<?php
namespace Thanh\Models;

use Thanh\Core\ResourceModel;
use Thanh\Models\TaskModel;

class TaskResourceModel extends ResourceModel
{

    //private $table = 'tasks';

    public function __construct()
    {
        parent::_init('tasks',"id",new TaskModel());
    }
}