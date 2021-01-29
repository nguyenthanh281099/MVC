<?php

namespace Thanh\Core;

use Thanh\Config\Database;
use Thanh\Core\ResourceModelInterface;

class ResourceModel implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }


    public function show()
    {
        $sql = "SELECT * FROM $this->table"; 
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    public function save($model)
    {


        $arrModel= $model->getProperties();
        $id = $model->getId();
        $placeholder=[];
        $insert_key=[];
        $placeUpdate=[];
        if ( $id == null)
        {   
            unset($arrModel['id']);
            //insert
            foreach ($arrModel as $key=>$value){
                $insert_key[] =$key;
                array_push($placeholder, ':'.$key);
            }
            $strKeyIns= implode(', ',$insert_key);
            $strPlaceholder=implode(', ',$placeholder);

            // echo $strKeyIns . "<br>" . $strPlaceholder; die();
            $sql_insert="INSERT INTO $this->table ({$strKeyIns}) VALUES ({$strPlaceholder})";
            $obj_insert =Database::getBdd()->prepare($sql_insert);
            return $obj_insert->execute($arrModel);
        }
        else    
        {
            foreach ($arrModel as $k=>$item){
                array_push($placeUpdate, $k.' = :'.$k);
            }         
            //update
           
            $strPlaceUpdate=implode(', ',$placeUpdate);
            $sql_update="UPDATE {$this->table} SET $strPlaceUpdate WHERE id=" .$id;
            $obj_update=Database::getBdd()->prepare($sql_update);

            return $obj_update->execute($arrModel);
        }
    }

    public function delete($model)
    {
        $id = $model->getId();
        $sql = "DELETE FROM $this->table WHERE id = " . $id;
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }


    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }
}