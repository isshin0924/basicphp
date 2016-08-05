<?php 
	//1
	echo "問題１変数";
	echo "<br>";

	//fullname
	$name = "isshintoyonaga";
	echo $name;
	echo "<br>";
	echo "<br>";

	echo "問題２";
	echo "<br>";

	$i = array("HTML","CSS","MySQL","CentOS");
	echo $i[0]; 
	echo "<br>";
	echo $i[1]; 
	echo "<br>";
	echo $i[2];
	echo "<br>"; 
	echo $i[3]; 
	echo "<br>";
	// foreach ($i as $value) {
	// 	var_dump($i);
	// 	echo "<br>";
	// }
	echo "<br>";
	echo "<br>";

	echo "問題３";
	echo "<br>";

	$in =array("name" => 'isshintoyonaga',"age" => 17,"nationality" => 'japan','gender' => 'male', 'email' => 'isshintakatsusaido@gmail', 'tel' => '110');
	echo $in['name']; 
	echo "<br>";
	echo $in['age'];
	echo "<br>"; 
	echo $in['nationality'];
	echo "<br>"; 
	echo $in['gender'];
	echo "<br>"; 
	echo $in['email'];
	echo "<br>"; 
	echo $in['tel'];
	echo "<br>";  

echo "<br>";
echo "<br>";

echo "問題４";
echo "<br>";

foreach ($i as $value) {
	var_dump($value);
	echo "<br>";
}


echo "<br>";
echo "<br>";


echo "問題５";
echo "<br>";
$i2 = count($i);
for ($d=0; $d < $i2 ; $d++) { 
	$code = $i[$d];
	echo $code;
	echo "<br>";
}

echo "<br>";
echo "<br>";

$an = '';
if (isset($_POST['1']) && isset($_POST['2']) && empty($an)) {
	$an = $_POST['1'] + $_POST['2'];
}



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>practice</title>
 </head>
 <body>

 <form method="post" action="practice.php">
 	<input type="text" name="1">+<input type="text" name="2">=<?php echo $an; ?>
 	<button type="submit">答えは</button>
 </form>
 	
 </body>
 </html>