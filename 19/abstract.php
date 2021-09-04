<?php
abstract class employee{
    public $firstname;
    public $lastname;
    public $age;
    public $address;

    public $salary;
    public $tax;
    public $overtime;
    public $overtimerate;
    public $apsent;
    public $apsentrate;
    abstract public function totalsalary();
    public function oversalary(){
        return $this->overtime* $this->overtimerate;
    }
    public function absentsalary(){
        return $this->apsent* $this->apsentrate;
    }
    // public function totalsalary(){
    //     return (($this->salary* $this->tax)-($this->absentsalary())+($this->oversalary()));
    // }
    // abstract public function showname();
}
interface employeeinterface{
    public function showaddress();
}
class manager extends employee implements employeeinterface{
    public $numofaudits;
    public function totalsalary(){
             return (($this->salary* $this->tax)-($this->absentsalary())+
             ($this->oversalary())+$this->numofaudits*100);
         }
         public function showaddress(){
             return $this->address;
         }
    
    // public function showname(){
    //     return 'welcome manger'. $this->lastname .' '. $this->firstname;
    // }
}
class supervisor extends employee{
    public $successfulprojects;
    public function totalsalary(){
             return (($this->salary* $this->tax)-($this->absentsalary())+
             ($this->oversalary())+$this->successfulprojects*50);
         }
    // public function showname(){
    //     return 'welcome super ' . $this->lastname .' '. $this->firstname;
    // }
}
class worker extends employee{
    public $bouns;
    public function totalsalary(){
             return (($this->salary* $this->tax)-($this->absentsalary())+
             ($this->oversalary())+$this->bouns*10);
         }
    // public function showname(){
    //     return 'welcome worker ' . $this->lastname .' '. $this->firstname;
    // }
}

$employee = new manager();
$employee->salary=100;
$employee->tax=10;
$employee->overtime=10;
$employee->overtimerate=2;
$employee->apsent=2;
$employee->apsentrate=5;
$employee->numofaudits=10;
$employee->address='cairo';
echo $employee->showaddress();
echo $employee->totalsalary();
// $employee->firstname = ' abdoh ';
// $employee->lastname = ' eman';
// echo $employee->showname();