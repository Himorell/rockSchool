<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController{

    public function __construct(){
        $this->index();
    }

    public function index(){

        $student = new Student;
        
        $students = $student->all();

        new View("studentList",["student"=> $students]);
    }


}