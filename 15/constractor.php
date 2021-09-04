<?php
    class student{
        public $name;
        public $age;
        private $level;
        public $subject = array(
            'math' => 0,
            'arabic' => 0,
            'english' => 0
        );
        public function __construct($name ,$age){
            $this->name =$name;
            if($age >=12){
                $this->age =$age;
            }else{
                throw new Exception('sorry the student\'s age must be greater than 12');
            }
            $this->welcome();
        }
        public function welcome(){
            echo 'welcome to '.$this->name;
        }
        public function setlevel($level){
            $level =abs(filter_var($level,FILTER_SANITIZE_NUMBER_INT));
            if($level < 1 || $level > 12){
                throw new Exception('sorry the student\'s level must be between 1 to 12');
            }else{
                $this->level = $level;
            }
        }
        public function getlevel(){
            return $this->level;
        }
    }
    $student1= new student('mohamed',12);
    $student1->setlevel(5);
    echo $student1->getlevel();
    // echo $student1->name;