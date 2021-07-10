<?php
$name="Jahed";//String
$age=23;//Integer
$weight=52.45;//Double
$isMale=false;
$salary=45000;
$num=4500;

//variable check
echo is_string($name)."<br/>";
echo is_int($age)."<br/>";
echo is_double($weight)."<br/>";
echo is_bool($isMale)."<br/>";
echo is_numeric($num)."<br/>";

//Constant
define("PI",3.1416);
echo PI;

var_dump($name);
var_dump($isMale);

$a=5;
$b=2;

//Arithmetic Operator
echo $a+$b;
echo $a-$b;
echo $a*$b;
echo $a/$b;
echo $a%$b;

//Assaignment Operator
echo $a+=$b;//$a=$a+$b
echo $a-=$b;
echo $a*=$b;
echo $a/=$b;

//Increment
$a++;
//++$a;
echo $a++."<br/>";
echo ++$a;

//Number's function

echo pow(2,3)."<br/>";
echo sqrt(16)."<br/>";
echo max(2,3)."<br/>";
echo min(2,3)."<br/>";
echo round(2.4)."<br/>";
echo floor(2.6)."<br/>";
echo ceil(2.4)."<br/>";

//difference between single quotation & dounle quotation
$str1='I am $name';
$str2="I am $name";
$str3="I am $name" . "My age is:".$age;
echo $str1."<br/>";
echo $str2."<br/>";

//String's function

$str="  Leading  ";
$str4="leading university Bangladesh";
$str5="leading-university-Bangladesh";
echo trim($str);
echo str_word_count($str);
echo strrev($str);
echo strtoupper($str);
echo strtolower($str);
echo ucfirst($str4);
echo lcfirst($str);
echo ucwords($str4);
echo str_replace('Bangladesh','Sylhet',$str4). "<br/>";
echo str_replace('-','',$str5). "<br/>";
echo str_ireplace('bangladesh','Sylhet',$str5). "<br/>";


?>