<?php
$uni1=['LU','NSU','DU','Brac'];
$uni=array('LU','NSU','DU','Brac',28,55.45);

//output
echo '<pre>';
var_dump($uni);
echo '<pre>';

//count
echo count($uni);

//isset
echo isset($uni[6]);
echo isset($uni[3]);

//push and pop
array_push($uni, "East West");
echo '<pre>';
var_dump($uni);
echo '<pre>';

array_pop($uni);
echo '<pre>';
var_dump($uni);
echo '<pre>';

//Adding first and Remove First
array_unshift($uni,"East West");
echo '<pre>';
var_dump($uni);
echo '<pre>';

array_shift($uni);
echo '<pre>';
var_dump($uni);
echo '<pre>';

//Split and merge
$str="Apple, Banana,Orange,25,5.05";
$newArr=explode(",",$str);
echo '<pre>';
var_dump($newArr);
echo '<pre>';

$newStr=implode("&",$uni);
echo '<pre>';
var_dump($newStr);
echo '<pre>';

//Search in array

$search=array_search("LU",$uni);
echo '<pre>';
var_dump($search);
echo '<pre>';

//check in array
$checkElement=in_array("LU",$uni);
echo '<pre>';
var_dump($checkElement);
echo '<pre>';

//merge 
$mergeNew=array_merge($uni,$uni1);
echo '<pre>';
var_dump($mergeNew);
echo '<pre>';

//Array sorting
sort($uni);
echo '<pre>';
var_dump($uni);
echo '<pre>';

//Associative Array
$favColor=array("Jahed"=>"blue","Tanvir"=>"red","Rezaul"=>"green","digit"=>"13");
echo $favColor["Jahed"];
echo $favColor["digit"];

foreach($favColor as $key=>$kvalue){
    echo $kvalue. " ";
}

//for loop
for($i=0;$i<count($uni);$i++){
    echo $uni[$i]." ";
}

//foreach
foreach($uni as $value){
    echo $value." ";
}

?>