<?php
//indexed array
$students = array('ahmed','mohamed','ali');
echo $students[2];
echo '<pre>';
print_r($students);
echo '</pre>';
$students[]='mona';
echo '<pre>';
print_r($students);
echo '</pre>';

//associative arry
$class1 =array('name'=>'eman','age'=>24);
echo $class1['name'];
// echo $class1[0];
//to insert value in assiative array
$class1['job'] =' student';
$class1[] ='cairo';
echo $class1['job'];
echo '<pre>';
print_r($class1);
echo '</pre>';

// multidimention array
$class2 = array('name'=>'ali','age'=>29,'job'=>'engineer');

$class =array($class1,$class2);
echo '<pre>';
print_r($class2);
echo '</pre>';
echo '<pre>';
print_r($class);
echo '</pre>';

$class =array('class1'=>$class1,'class2'=>$class2);
echo '<pre>';
print_r($class);
echo '</pre>';
echo $class['class1']['age'];

//list array
list($name1 ,$name2,$name3) = $students;
echo $name1 ,$name2;

//rang array
$num = range(1,5);
$letter = range('a','z',2);
echo '<pre>';
print_r($num);
echo '</pre>';

echo '<pre>';
print_r($letter);
echo '</pre>';
