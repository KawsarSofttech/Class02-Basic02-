<?php 

$a = 6;
if($a == 6) {			
	echo "found!";
}else{
	echo "not found!";
}
	echo "<br>";

$a = '6';
if($a === 6) {			
	echo "found!";
}else{
	echo "not found!";
}
	echo "<br>";
$name = "kawsar";
$age = 35;
if($name == "kawsar" && $age == 35){
	echo "found!";
}else{
	echo "not found!";
}
	echo "<br>";
$name = "kawsar";
$age = 36;
if($name == "kawsar" || $age == 35){
	echo "found!";
}else{
	echo "not found!";
}
	echo "<br>";
$name = "kawsar";
$age = 35;
if($name == "kawsar"){
	echo "Name ok!";
}else if($age == 35){
	echo "Age ok!";
}else if($age > 30){
	echo "OK!";
}else{
	echo "Nothing!";
}
echo "<br>";

$name = "kawsar";
$age = 35;
if($name == "kawsar"){
	echo "Name ok!";
}
if($age == 35){
	echo "Age ok!";
}
if($age > 30){
	echo "OK!";
}else{
	echo "Nothing!";
}
echo "<br>";
$num1 = 10;
$num2 = 20;
$num3 = 30;
if($num1 > $num2 && $num1 > $num3){
	echo "num1 is the biggest";
}else if($num2 > $num1 && $num2 > $num3){
	echo "num2 is the biggest";
}else{
	echo "num3 is the biggest";
}
echo "<br>";
$num = 21;
$res = $num % 2;
if($res == 0){
	echo "Even";
}else{
	echo "Odd";
}
echo "<br>";
$text = "We are Batch CTG-323";
echo strlen($text);
echo "<br>";
greet();
function greet(){
	$res = 2 + 3;
	echo "Result is GPA ".$res;
}
echo "<br>";
$b = hi1();
echo $b;
function hi1(){
	$res = 2 + 3;
	return $res;
}
echo "<br>";
hi2("Bill Gates");
function hi2($name){
	echo"Welcome ".$name;
}
echo "<br>";
$c = hi3(5,2);
echo $c;
echo "<br>";
echo hi3(6,3);
echo "<br>";
echo hi3(7,4);
echo "<br>";
echo hi3(8,5);
function hi3($num1,$num2){
	$res = $num1 + $num2;
	return $res;
}
echo "<br>";
$d = hi4("Md. Abu","Kawsar");
echo $d;
function hi4($first,$last){
	$res = $first." ".$last;
	return $res;
}
echo "<br>";
$fname = "Md. Abu";
$lname = "Kawsar";
$e = hi5($fname,$lname);
echo $e;
function hi5($first,$last){
	$res = $first." ".$last;
	return $res;
}
echo "<br>";
for( $i = 1; $i < 6; $i++){
	echo "Hello World <br>";
}
echo "<br>";
$i = 0;
while($i < 5){
	echo "Hello <br>";
	$i++;
}
$i = 1;
do{
echo "I am working <br>";
$i++;
}while($i < 5);
echo "<br>";
$i = 2;
switch ($i) {
	case '1':
		echo "Number is one";
		break;
	case '2':
		echo "Number is Two";
		break;
	
	default:
		echo "Nothing";
		break;
}
echo "<br>";
$i = 1;
while($i < 5 ){
	echo "Hello <br>";
	$i++;
}
$i = 1;
do{
echo "I am working <br>";
$i++;
}while($i < 5);

?>