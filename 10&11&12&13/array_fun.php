<?php
$mails = array(
    "hotmail"   => "example@hotmail.com",
    "gmail"     => "example@gmail.com",
    "yahoo"     => "example@yahoo.com",
    "skype"   => "example@outlook.com"      
);
$email = array(
    "hotmail"   => "example@hotmail.com",
    "gmail"     => "example@gmail.com",
    "yahoo"     => "example@yahoo.com",
    "outlook"   => "example@outlook.com"      
);
$courses = array("web","graphic","english","office");
$colors = array("red","black","white","orange");
$colors2 = array("red","black","white","red","green","red","blue","blue","red");
$num = array(10,19,17,25,44,50);
// 1) array_change_key_case($array,case)
echo "<h3> array_change_key_case</h3>";
echo "<pre>";
$mail = array_change_key_case($mails,CASE_UPPER);
print_r($mail);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 2) array_keys($array)
echo "<h3> array_keys</h3>";
$arr1 = array_keys($mails);
echo "<pre>";
print_r($arr1);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 3) array_values($array)
echo "<h3>array_values</h3>";
$arr2 = array_values($mails);
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 4) array_count_values($array)
echo "<h3> array_count_values()</h3>";
echo "<pre>";
print_r(array_count_values($colors2));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 5) array_intersect($array1,$array2,..........)
echo "<h3>array_intersect()</h3>";
echo "<pre>";
print_r(array_intersect($colors,$colors2));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 6) array_intersect_keys()
echo "<h3>array_intersect_key()</h3>";
echo "<pre>";
print_r(array_intersect_key($mails,$email));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 7) array_merge()
echo "<h3> array_merge()</h3>";
echo "<pre>";
print_r(array_merge($courses,$colors));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 8) array_merge_recrusive()
echo "<h3> array_merge_recrusive()</h3>";
echo "<pre>";
print_r(array_merge_recursive($mails,$email));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 9) in_array(needle,haystack,strict)
echo "<h3>in_array()</h3>";
if ( in_array(10,$num,true)){
    echo "found";
}
else{
    echo "not founded";
}
echo "<br><hr>";
/*======================================================================*/
// 10) array_search(needle,haystack,strict)
echo "<h3>array_search</h3>";
if ( array_search("yat@hotmail.com",$mail) ){
    echo "matched";
}
else{
    echo "not matched";
}
echo "<br><hr>";
/*======================================================================*/
// 11) array_key_exists(key,array)
echo "<h3>array_key_exists()</h3>";
if ( array_key_exists("hotmail",$mails) ){
    echo "yes key already exists";
}
else{
    echo "sorry not founded";
}
echo "<br><hr>";
/*======================================================================*/
// 12) array_pop($array)
echo "<h3>array_pop()</h3>";
echo "<pre>";
print_r($colors);
echo "</pre>";
array_pop($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 13) array_push($array, value)
echo "<h3>array_push</h3>";
array_push($colors,"pink");
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 14) array_shift($array)
echo "<h3>array_shift()</h3>";
array_shift($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 15) array_unshift($array,value)
echo "<h3>array_unshift</h3>";
array_unshift($colors,"blue");
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 16) array_slice($array,start,length,preverse)
echo "<h3>array_slice</h3>";
echo "<pre>";
print_r(array_slice($colors,2,2,true));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 17) array_splice($array,start,length,array)
echo "<h3> array_splice()</h3>";
$arr3= array("icdl","h.r");
array_splice($courses,1,3,$arr3);
echo "<pre>";
print_r($courses);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 18) array_sum(array)
echo "<h3> array_sum</h3>";
echo array_sum($num);
echo "<br><hr>";
/*======================================================================*/
// 19) sort()
echo "<h3> sort()</h3>";
sort($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 20) rsort()
echo "<h3> rsort()</h3>";
rsort($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 21) asort()
echo "<h3> sort()</h3>";
asort($mails);
echo "<pre>";
print_r($mails);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 22) arsort()
echo "<h3> arsort()</h3>";
arsort($mails);
echo "<pre>";
print_r($mails);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 23) ksort()
echo "<h3> ksort()</h3>";
ksort($mails);
echo "<pre>";
print_r($mails);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 24) krsort()
echo "<h3> krsort()</h3>";
krsort($mails);
echo "<pre>";
print_r($mails);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 25) array_uniqu()
echo "<h3> array_unique()</h3>";
echo "<pre>";
print_r(array_unique($colors2));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 26) shuffle()
echo "<h3> shuffle()</h3>";
shuffle($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 27) array_reverse()
echo "<h3> array_reverse()</h3>";
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r(array_reverse($colors));
echo "</pre>";
echo "<br><hr>";
/*======================================================================*/
// 28) array_rand()
echo "<h3> array_rand()</h3>";
echo "<pre>";
print_r(array_rand($mails,2));
echo "</pre>";
echo "<br><hr>";