<?php
namespace Thanh\Models;

use Thanh\Core\ResourceModel;
use Thanh\Models\StudentModel;

class StudentResourceModel extends ResourceModel
{

    public function __construct()
    {
        parent::_init('sinhvien','id',new StudentModel());
    }
}