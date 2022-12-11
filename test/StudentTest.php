<?php

namespace test;

use PHPUnit\Framework\TestCase;
use App\Models\Student;


class StudentTest extends TestCase{

    /*public function test_testOK(){
        $this->assertEquals(1,1);

    }*/


    public function test_ifGetStudentWorkCorrectly(){
        //given - actor
        $newStudent = new Student(null, "Himo", "Comment for class", null);

        //when - rodaje
        $resultGetStudent = $newStudent->getStudent(); 

        //then - critica
        $this->assertEquals("Himo", $resultGetStudent);

    }

    public function test_ifGetMessageWorkCorrectly(){
        //given - actor
        $newStudent = new Student(null, "Himo", "Comment for class", null);

        //when - rodaje
        $resultGetMessageStudent = $newStudent->getMessage(); 

        //then - critica
        $this->assertEquals("Comment for Class", $resultGetMessageStudent);

    }

}

?>