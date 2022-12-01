<?php

namespace App\Models;

use App\Database;

class Student{

    private ?int $id;
    private string $student;
    private string $message;
    private ?string $dateTime;


    private $table = "reservations";
    private $database;

    public function __construct(
        $id = null, string $student = '', string $message = '', string $dateTime = '')
        {
           $this->id =$id;
           $this->student =$student;
           $this->message =$message;
           $this->dateTime =$dateTime;

        if(!$this->database){
            $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $studentArray = $query->fetchAll();
      
        $studentList = [];

        foreach ($studentArray as $student){
            $studentItem = new Student($student["id"], $student["student"], $student["message"], $student["dateTime"]);

            array_push($studentList, $studentItem);
        }
       
        return $studentList; 
     
        
    }


    public function getId(){
        return $this->id;  
    }

    public function getMessage(){
        return $this->message;
    }

    public function getStudent(){
        return $this->student;
    }

    public function getDateTime(){
        return $this->dateTime;
    }

    public function save(){
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`student`, `message`) VALUES ('$this->student','$this->message');");
        
    }
}