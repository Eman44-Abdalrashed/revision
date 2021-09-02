<?php
// real number
$realnumber = 10;
echo $realnumber . "</br>";
//float number 
$floatnumber = 1.45;
echo $floatnumber;

echo "</br>" . 2e2 ."</br>";

//string
$string ="welcome to my website  {$realnumber}";
echo $string . "</br>";

/*boolean
 0   => false
 1   => true
 ""  =>false
 " " => true
*/
$boolean ="true or false";

//array
$array =array(1,2,3,4,5,6,7);
echo $array[5];

//object
class employ{
    public $name;
    public $age;
    public $salary;

    public function showsalary(){
        echo $this->salary;
    }
}

$emp1 = new employ();
$emp1->name = "Eman";
$emp1->age =24;
$emp1->salary=100;
echo $emp1->name;
$emp1->showsalary();

//converting from data type to another
//(int) (integr), (bool) (boolean), (object),(array),(real) (float) (double)
$x = 10.6;
echo "</br> data type of x is".(bool)$x;
$name = "11eman";
echo "</br>".(int)$name."</br>";
$arr =(array)$x;
echo $arr[0];
$set =10;
// $ww =(int)$set;
settype($set,'array');
echo "</br>". is_array($set)."</br>";
echo gettype($set);