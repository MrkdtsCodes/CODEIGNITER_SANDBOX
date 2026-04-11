<?php

    class Examples extends CI_Controller{

        private $id = 001;
        private $name = 'Mark Andrie D. Datus';
        private $age = 21;
        private $course = "BSIT";
        private $grade = "4th College";

       


        public function displayTable(){

        $data['message'] = "Ako ay si $this->name";



        $this->load->view('pages/example', $data);
            
        }

    }