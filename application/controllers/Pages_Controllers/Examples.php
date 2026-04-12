<?php

    class Examples extends CI_Controller{

        // private $id = 001;
        // private $name = 'Mark Andrie D. Datus';
        // private $age = 21;
        // private $course = "BSIT";
        // private $grade = "4th College";

       

       


        public function displayTable(){
        
        // $data['student_list'] = $this->students;

        // $this->load->view('pages/example', $data);


        //load the models to this controller 
        $this->load->model('students_models');
        $students = $this->students_models->getstuddata();

        foreach($students as $key){
            echo $key['Name'];
        }
            
        }


        public function findstud($id){
       

        // foreach($this->students as $studs){
        //     if($studs['id'] == $id){
        //         $data['Name'] =$this->name;
               
        //     }
        // }

        // $this->load->view('pages/finds', $data);
            
        
        }

    }