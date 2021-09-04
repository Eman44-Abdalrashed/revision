<?php
    class student{
        protected $name;
        protected $age;
        protected $subject = array(
            'math' => 0,
            'arabic' => 0,
            'english' => 0
        );
        const min_age =12;
        const max_age =21;
        private static $teacher ='ahmed mohamed ali';
        public function __construct($name ,$age){
            $this->setname($name);
            $this->setage($age);
            
        }
        private function setname($name){
            $name = strtolower($name);
            $name = filter_var($name,FILTER_SANITIZE_STRING);
            $name = ucwords($name);
            $name = substr($name ,0,20);
            $this->name = $name;
        }
        private function setage($age){
            $age = filter_var($age,FILTER_SANITIZE_NUMBER_INT);
            $age = abs($age);
            if($age < static:: min_age || $age > static::max_age){
                throw new Exception('sorry   ');
            }else {
                $this->age =$age;
            }
        }
        public function getname(){
            return $this->name;
        }
        public function getage(){
            return $this->age;
        }
        public function setsubject($subject ,$value){
            if(array_key_exists($subject , $this->subject)){
                $value = filter_var($value,FILTER_SANITIZE_NUMBER_INT);
                $value = abs($value);
                if($value > 50){
                    throw new Exception('sorry');
                }else{
                    $this->subject[$subject] = $value;
                }
            }else{
                throw new Exception('sorry');
            }
        }
        public function getsubject($subject){
            if(array_key_exists($subject, $this->subject)){
                return $this->subject[$subject];
            }else{
                throw new Exception('sorry');
            }
        }
        public  function showteacher(){
            return self::$teacher;
        }
        public static function show(){
            return self::$teacher;
        }
        
    }
    class grade1student extends student{
        const min_age = 13;
        const max_age = 20;
        public static $teacher ='ahmed';
        private $activity;
         public function setactivity(){
             $this->activity = 'Active';
         }
         public function setnoactive(){
             $this->activity = 'No Active';
         }
        public function __construct($name,$age){
            parent::__construct($name,$age);
            $this->subject['computer'] = 0;
        }
        // public static function show(){
        //     return self::$teacher;
        // }
        
    }
    $eman =new student('eman abdoh',16);
    // echo $eman->show();
    // echo $eman->teacher;
    // echo student::$teacher;
    // echo grade1student::$teacher;

    $ali = new grade1student('eman abdalrashed alsaid',13);
    echo $ali->show();
    // echo $ali::$teacher;
    // $ali->setsubject('math',40);
    // echo $ali->getsubject('math');
    // echo '<pre>';
    // var_dump($ali);
    // echo'</pre>';