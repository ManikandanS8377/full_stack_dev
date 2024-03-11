<?php

namespace App\Controllers;
use App\Models\Database_con;

class Home extends BaseController
{
    public function __construct(){
        $this->connection_db = new Database_con();

        $this->datas['status'] ="";
        $this->datas['message'] = "";
    }

    public function index(): string
    {
        return view('dashboard_home',$this->datas);
    }


    public function editPage()
    {
        return view('Edit',$this->datas);
    }

    public function deletePage()
    {
        return view('Delete',$this->datas);
    }

    

   
    // API - CRUD(Create,Read,Update,Delete)

    //  --> /createValue
    public function createValue()
    {
        $roll_number = $this->request->getVar('roll_number');
        $name = $this->request->getVar('name');
        $mark = $this->request->getVar('mark');
        $this->datas['message'] =  $this->connection_db->createValues($roll_number,$name,$mark);
        if ($this->datas['message']) {
            $this->datas['status'] = "Inserted Successfully!!";
        }
        return view('dashboard_home',$this->datas);
    }
    //  --> /readValue
    public function readValue()
    {
        echo "This is a Read API End point";
        echo "<br>";
        $datas =  $this->connection_db->getValues();
        echo "<pre>";
        print_r($datas);
    }
    //  --> /updateValue
    public function updateValue()
    {
        $roll_number = $this->request->getVar('roll_number');
        $name = $this->request->getVar('name');
        $mark = $this->request->getVar('mark');
        $this->datas['message'] =  $this->connection_db->updateValues($roll_number,$name,$mark);
        if ($this->datas['message']) {
            $this->datas['status'] = "Updated Successfully!!";
        }
        return view('Edit',$this->datas);
    }
    //  --> /deleteValue
    public function deleteValue()
    {
        $roll_number = $this->request->getVar('roll_number');
        $this->datas['message'] =  $this->connection_db->deleteValues($roll_number);
        if ($this->datas['message']) {
            $this->datas['status'] = "Deleted Successfully!!";
        }
        return view('Delete',$this->datas);
    }

}
