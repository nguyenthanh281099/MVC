<?php
namespace Thanh\Models; 

use Thanh\Core\Model;


class TaskModel extends Model
{
    protected $title;
    protected $id;
    protected $description;
    protected $created_at;
    protected $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setcreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdated_at()
    {
        return $this->update_at;
    }

    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
