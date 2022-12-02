<?php

namespace App\Controllers;

use App\Models\Student;
use App\Core\View;

class StudentController{

    public function __construct(){

        
        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if(isset($_GET["action"]) == "store"){
            $this->store($_POST);  
            return;
        }

        if(isset($_GET["action"]) == "delete"){
            $this->delete($_GET["id"]);  
            return;
        }

        $this->index();

    }

    // este es el metodo de la R de crud
    public function index()
    {
        $student = new Student;

        $students = $student->all();

        new View("studentList",["student" => $students]);

    }

 //La C de crud necesita dos métodos
public function create(){
    new View("createStudent");
}

public function store(array $request){
    $newStudent = new Student(null,$request["student"],$request["message"]);
    $newStudent -> save();
    $this->index();
}

public function delete($id){
    $studentHelper = new Student(null,$request["student"],$request["message"],null); //revisar orden de variable DB
    $student -> $studentHelper->findById($id);
    $student->destroy();

    $this->index();
}

}

