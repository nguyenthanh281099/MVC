<?php
namespace Thanh\Models; 

use Thanh\Core\Model;


class StudentModel extends Model
{
    protected $sinhvien_name;
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getStudent_name()
    {
        return $this->sinhvien_name;
    }

    public function setStudent_name($sinhvien_name)
    {
        $this->sinhvien_name = $sinhvien_name;
    }
    
}
