<?php
    class Employee{
        public $name;
        public $age;
        public $job;
        public $salary;
        public $overtime;
        public $overtimerate;
        public $apsent;
        public $apsentrate;

        public function totalsalary(){
            return $this->salary +($this->overtime*$this->overtimerate)-($this->apsent*$this->apsentrate);
        }

    }
    $employee1 = new Employee();
    $employee1->name ='eman';
    $employee1->salary=1000;
    $employee1->overtime=3;
    $employee1->overtimerate=50;
    $employee1->apsent=2;
    $employee1->apsentrate=10;
    echo $employee1->totalsalary();

