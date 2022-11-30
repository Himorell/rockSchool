<? php
namespace App\Models;

use App\Database;

class Student{

    public function __construct()
    {
        if (!$this->database){
            $this->database = new Database();
        }
    }
}