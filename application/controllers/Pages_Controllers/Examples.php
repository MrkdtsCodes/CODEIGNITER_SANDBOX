<?php
/**
 * @property Students_models $Students_models
 */

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
        // $this->load->model('Students_models');
        // $students = $this->Students_models->getstuddata();

        // foreach($students as $key){
        //     echo $key['Name'] .  '<br>';
        // }
            
        }


        public function findstud($id){
       

        // foreach($this->students as $studs){
        //     if($studs['id'] == $id){
        //         $data['Name'] =$this->name;
               
        //     }
        // }

        // $this->load->view('pages/finds', $data);
            
        
        }


        public function catchvalue($vals){
            // $this->load->model('Students_models')

            $this->load->model('Students_models');

            //pass the params to the model and get results
            $data['students_identity'] = $this->Students_models->CatchValsFromControllers($vals);

            //path to your model 
           $this->load->view('pages/finds', $data);

        }

    }