
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
//echo 'something';
// $users = array();
// array_push($users, "Oliver");
// var_dump($users);
// echo '<br>';
// //display odd number from 1 to 1000
//  $numbers = array(1,2,5,10,255,3);
//  $sum = 0;
//  $average = 0;
//  foreach ($numbers as $key => $number) {
//  	$sum+= $number;
//  	$average = $sum/($key+1);
//  }

//  echo $sum.'<br>';
//  echo $average.'<br>';
//  $arraytest = array();
// for($i=0;$i<20000;$i++){
// 	if ($i%2==1){
// 		array_push($arraytest,$i);
// 	}

// }
// var_dump($arraytest);
	// for($i = 5 ;$i<1000000;$i=$i+5){
		
	// 		echo $i.'<br>' ;
		
	// }
//echo phpinfo();
// for ($i=1;$i<2000;$i++){
// 	if($i%2==0){
// 		echo "Number is ".$i." This is an even number<br>";
// 	}
// 	elseif ($i%2==1){
// 		echo "Number is ".$i." This is an odd number<br>";
// 	}
// }
// $x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
// foreach($x as $y)
// {
//   foreach($y as $key=>$value)
//   {
//     echo $key ." - " . $value."<br />";
//   }
// }
// $strtest = "hello world";
// echo $strtest.'<br>';
// echo strpos($strtest,'h');
// Provides: Hll Wrld f PHP
// $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

// echo implode($vowels);
// $str = "Hello world. It's a beautiful day.";
// print_r (explode(" ",$str));
// $arr = array('Hello','World!','Beautiful','Day!');
// echo '<br>'.implode(" ",$arr);
// for($i=0;$i<count($arr);$i++){
// 	echo '<br>'."hi";
// }
// $sample = array(10, 3, 5, 8, 4, 2, 1, 333); 
// function print_average($sample){
// 	$sum = 0;
// 	$average = 0;
// 	foreach ($sample as $key => $value) {
// 		$sum += $value;
// 		$average = $sum/($key+1);
// 	}
// 	return $average;

// }
// $output = print_average($sample); 
// echo $output;
// $A = array(2,4,10,16);
// function multiply($arr,$num)
// { 
// 	$newarr = array();
//   foreach ($arr as $key => $value) {
//   	$value = $value *$num;
//   	array_push($newarr, $value);
//   	# code...
//   }
//   return $newarr;
// }
// $B = multiply($A,2);
// var_dump($B);
// $arr = array(2,3,"hello");
//  function print_list($arrone){
//  	echo "<ul>";
//  	foreach ($arrone as $key => $value) {
//  		echo "<li>".$value."</li>";
//  	}
//  	echo "</ul>";
//  }
//  print_list($arr);
//To Do: Keys and Values
// $users=array('first_name'=>"Michael",'last_name'=>"Choi");
// function keyandValue($arr){
// 	echo "There are ".count($arr)." keys in the array<br>";
// 	foreach ($arr as $key => $value) {
// 		echo $key.'<br>';

// 	}
// 	foreach ($arr as $key => $value) {
// 		echo "the value in the key ".$key." is ".$value.'<br>';
// 	}
// }

// keyandValue($users);
// Score and Grade:
// $score = rand(50,100);
// function displayScore($score){
// 	if ($score<70){
// 		echo "<h1> Your Score: ".$score."</h1><br> ";
// 		echo "<h2> Your grade is D.</h2>";
// 	}
// 	elseif ($score>=70&&$score<80){
// 		echo "<h1> Your Score: ".$score."</h1><br> ";
// 		echo "<h2> Your grade is C.</h2>";
// 	}
// 	elseif ($score>=80&&$score<90){
// 		echo "<h1> Your Score: ".$score."</h1><br> ";
// 		echo "<h2> Your grade is B.</h2>";
// 	}
// 	else{
// 		echo "<h1> Your Score: ".$score."</h1><br> ";
// 		echo "<h2> Your grade is A.</h2>";
// 	}
// }
// for($i=0;$i<100;$i++){
// 	$score = rand(50,100);
// 	displayScore($score);
// }
//State Array:
// $states = array('CA','WA','VA','UT','AZ');
//  echo "<select><br>";
//  for($i=0;$i<count($states);$i++){
//  	echo "<option> ".$states[$i]."/<option>";
//  }
//Coin Throw

// function CoinThrow(){
// 	$head = 0;
// 	$tail = 0;
// 	//$coinvalue = rand(0,1);
// 	for($i=0;$i<100;$i++){
// 		$coinvalue = rand(0,1);
// 		if($coinvalue==0){
// 			$head+=1;
// 			echo "Attempt ".($i+1)." : Throwing a coin... It's a head! ... Got ".$head."  head(s) so far and ".$tail." tail(s) so far<br>";
// 		}
// 		else{
// 			$tail+=1;
// 			echo "Attempt ".($i+1)." : Throwing a coin... It's a tail! ... Got ".$head."  head(s) so far and ".$tail." tail(s) so far<br>";
// 		}
// 	}
// 	echo "<h5>Ending the program - thank you!</h5>";
// }
// CoinThrow();

//Get Min and Max

// $sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 

// function get_max_and_min($sample){
// 	$min = $sample[0];
// 	$max = $sample[0];
// 	foreach ($sample as $key => $value) {
// 		if($value>$max){
// 			$max = $value;
// 		}
// 		if($value<$min)
// 			$min = $value;
// 		# code...
// 	}
// 	$min_max = array($min,$max);
// 	return $min_max;
// }
// $output = get_max_and_min($sample);
// var_dump($output);

//Draw Stars:

// $x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
//  function draw_stars($arr){
//  	foreach ($arr as $key => $value) {

//  		if(gettype($value)=="string"){
//  			for($m=0;$m<strlen($value);$m++){
//  				echo strtolower($value[0]);
//  			}
//  			echo "<br>";
//  		}
//  		else{
// 	 		for ($j=0;$j<$value;$j++){
// 	 			echo "*";
// 	 		}
// 	 		echo "<br>";
// 	 	}
//  	}
//  }
//  draw_stars($x);

//Multiplication Table
?>



<!-- <table>
<?php for($i=1; $i<=3; $i++)
      { ?>
      <tr>
<?php    for($j=1; $j<=3; $j++)
         { ?>
         <td><?php echo $i; ?>x<?php echo $j; ?></td>
<?php    } ?>
      </tr>
<?php } ?>
</table> -->

<?php  
// "<h2> Fix all the errors to show the page </h2>";
// $array = array("var_dump", "and", "echo", "helps", "debug");
// for($i = 0; $i < count($array); $i++)
// {
//   echo "The value of the ".$i." index is " .$array[$i]."<br>";
// }
// echo "<h3>isset function determines if a variable is set and is not NULL</h3>";
// $error = "";
// if(isset($error)) 
// {
//   echo "Is an empty string NULL? Also, think of an operator that we can use to return a true value to a variable that is not set yet!!!!!<br>";
// 	if(isset($array))
// 	{
// 	  var_dump($array);
// 	}
// }
?>
<?php
	$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel') 
	);
?>
<table>
	<tr>
		<td>User #</td><td>	First Name</td><td>	Last Name</td>	<td>Full Name</td>	<td>Full Name in upper case	</td><td> Length of full name (without spaces)</td>
		
	</tr>
	<tr>
		<td><?php 
		foreach ($users as $key => $user) {
			echo $key."<br>";
		} ?></td>
		<td><?php 
		foreach ($users as $key => $user) {
			echo $user['first_name']."<br>";
		} ?></td>
		<td><?php 
		foreach ($users as $key => $user) {
			echo $user['last_name']."<br>";
		} ?></td>
		<td><?php 
		foreach ($users as $key => $user) {
			echo $user['first_name']." ".$user['last_name']."<br>";
		} ?></td>
		<td><?php 
		foreach ($users as $key => $user) {
			echo strtoupper($user['first_name']." ".$user['last_name'])."<br>";
		} ?></td>
		<td><?php 
		foreach ($users as $key => $user) {
			echo strlen($user['first_name'].$user['last_name'])."<br>";
		} ?></td>
	</tr>
</table>

<table>
	<tr>
		<td>User #</td><td>	First Name</td><td>	Last Name</td>	<td>Full Name</td>	<td>Full Name in upper case	</td><td> Length of full name (without spaces)</td>
		
	</tr>
	<tr>
		<td><?php 
		for ($i=0;$i<count($users);$i++) {
			echo $i."<br>";
		} ?></td>
		<td><?php 
		for ($i=0;$i<count($users);$i++) {
			echo $users[$i]['first_name']."<br>";
		} ?></td>
		<td><?php 
		for ($i=0;$i<count($users);$i++) {
			echo $users[$i]['last_name']."<br>";
		} ?></td>
		<td><?php 
		for ($i=0;$i<count($users);$i++) {
			echo $users[$i]['first_name']." ".$users[$i]['last_name']."<br>";
		} ?></td>
		<td><?php 
		for ($i=0;$i<count($users);$i++) {
			echo strtoupper($users[$i]['first_name']." ".$users[$i]['last_name'])."<br>";
		} ?></td>
		<td><?php 
		for ($i=0;$i<count($users);$i++) {
			echo strlen($users[$i]['first_name'].$users[$i]['last_name'])."<br>";
		} ?></td>
	</tr>
</table>
<style type="text/css">
	td{
		color: blue;
	}
</style>

<?php
// //deal with CSV File:
// $row = 1;
// //ini_set (for this exercise, we set 'auto_detect_line_endings' to TRUE) so your code will read:
// //ini_set('auto_detect_line_endings', true)  - This tells your script to automatically detect when the CSV file breaks a line
// ini_set('auto_detect_line_endings', true);
// //fopen required to open your CSV file and begin using the data it contains
// if (($handle = fopen("us-500.csv", "r")) !== FALSE) {
// 	//fgetcsv command allows the user to grab information from a file opened with fopen 
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num fields in line $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c].' ' ;
//         }
//         echo '<br>';
//     }
//     fclose($handle);
// }
?>

<?php

$arrone = [1,5,3,6,2,8,9,4,7];
function selected_sort($arr){
	$min = $arr[0];
	
	for($i=0;$i<count($arr);$i++){
		$min =$arr[$i];
		for($j=$i+1;$j<count($arr);$j++){
			if($arr[$j]<$arr[$i]){
				$min = $arr[$j];
				
				$temp = $arr[$i];
				$arr[$i]=$min;
				$arr[$j]=$temp;
			}

		
		}
	}
	return $arr;
}
$arrtwo = selected_sort($arrone);
echo var_dump($arrtwo);
var_dump($_GET);
?>

<form method="post" action="result.php">
	Your name: <input type="text" name="name"><br>
	Dojo Location: <select><option value="Burbank">Burbank</option>
  <option value="San Diego">San Diego</option></select><br>
  	Favorite Language: <select><option value="PHP">PHP</option>

  <option value="Swift">Swift</option></select><br>
  <input type="text" name="comment"><br>
  <input type="submit" name="sub" value="Submit">
</form>


















































