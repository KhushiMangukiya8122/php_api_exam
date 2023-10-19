<?php

class Config{

    public $HOSTNAME = "localhost";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "student_info";
    public $con_res;

    public function connect() {

        $this->con_res = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

        return $this->con_res;
    }

    public function insert($student_name, $student_mother_name, $student_father_name, $stream) {
        $this->connect();

        $student_name = $_POST($this->con_res, $student_name); 
        $student_mother_name = $_POST($this->con_res, $student_mother_name); 
        $student_father_name = $_POST($this->con_res, $student_father_name); 
        $stream = $_POST($this->con_res, $stream); 

        $query = "INSERT INTO student(student_name, student_mother_name, student_father_name, stream) VALUES ('$student_name','$student_mother_name', '$student_father_name', $stream');";

        $res = mysqli_query($this->con_res, $query);

       return $res;
    }

    public function fetch_data() {

        $this->connect();

        $query = "SELECT * FROM student"; 

        $res = mysqli_query($this->con_res, $query); 

        return $res;
    }

 }

?>