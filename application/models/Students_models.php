<?php


class Students_models extends CI_Model{

    public $student_data = [
            ["id" => "001", "Name" => "Juan Dela Cruz",     "Age" => "20", "Course" => "BSCS",  "grade" => "2nd year"],
            ["id" => "002", "Name" => "Maria Santos",       "Age" => "21", "Course" => "BSIT",  "grade" => "3rd year"],
            ["id" => "003", "Name" => "Carlo Reyes",        "Age" => "19", "Course" => "BSCE",  "grade" => "1st year"],
            ["id" => "004", "Name" => "Ana Mendoza",        "Age" => "22", "Course" => "BSBA",  "grade" => "4th year"],
            ["id" => "005", "Name" => "Luis Garcia",        "Age" => "20", "Course" => "BSECE", "grade" => "2nd year"],
            ["id" => "006", "Name" => "Patricia Villanueva","Age" => "23", "Course" => "BSED",  "grade" => "4th year"],
            ["id" => "007", "Name" => "Ramon Aquino",       "Age" => "18", "Course" => "BSCS",  "grade" => "1st year"],
            ["id" => "008", "Name" => "Celine Torres",      "Age" => "21", "Course" => "BSN",   "grade" => "3rd year"],
            ["id" => "009", "Name" => "Bong Pascual",       "Age" => "22", "Course" => "BSIT",  "grade" => "3rd year"],
            ["id" => "010", "Name" => "Lovely Castillo",    "Age" => "19", "Course" => "BSBA",  "grade" => "2nd year"],
            ["id" => "011", "Name" => "Jerome Navarro",     "Age" => "24", "Course" => "BSCE",  "grade" => "4th year"],
            ["id" => "012", "Name" => "Kristine Flores",    "Age" => "20", "Course" => "BSED",  "grade" => "2nd year"],
            ["id" => "013", "Name" => "Andrei Ramos",       "Age" => "21", "Course" => "BSECE", "grade" => "3rd year"],
            ["id" => "014", "Name" => "Trisha Evangelista", "Age" => "19", "Course" => "BSN",   "grade" => "1st year"],
            ["id" => "015", "Name" => "Gab Soriano",        "Age" => "22", "Course" => "BSCS",  "grade" => "4th year"],
        ];

    //getters so pur controller can access this

    public function getstuddata(){
        return $this->student_data;
    }
}