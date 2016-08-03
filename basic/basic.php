<?php 
//php風の基礎復習

//変数
//$変数名＝データ
//なんでも入れられる箱
$greeting = "hello"; 
$str = $greeting;

echo $greeting;

echo "<br>";

echo $str;

echo "<br>";

$var1 = "hello";
$var = $var1 . 'world';

echo $var;

echo "<br>";

//真偽値
// bool型　treu or false
//a == b は値が一致する
//a === b は値とデータ端が一致すれば(文字の時はこれでやる)

if ($var1 == "hello") {
	echo "SEikai";
}else{
	echo "ba-ka";
}

if (strlen($var1) == 5) {
	echo "5";
}

echo "<br>";
echo "<br>";
echo "<br>";

$a = 0;
$b = 1;
if ($a == 0 && $b == 1) {
	echo "a&b";
}
echo "<br>";
if ($a == 1 || $b == 1) {
	echo "a or b";
}
echo "<br>";
echo "<br>";
echo "<br>";

//switch文
//１つの基準変数に対して、複数の場合分けを行いたい場合は
//if文ではなくswitch文を使う
$disc = rand(1,6);
switch ($disc) {
	case 3:
		echo "中継地点にワープする";
		break;
	
	default: # 必ず最後に必要
		echo $disc . "マス進む";
		break;
}
echo "<br>";
echo "<br>";
echo "<br>";

//while文
$i = 0;

while ($i <= 10) {
	$i += 1;
	echo $i;
}
echo "<br>";
echo "<br>";
echo "<br>";

for ($t=0; $t < 10; $t++) { 
	echo "<br>";
	echo $t;
}
echo "<br>";
echo "<br>";
echo "<br>";
//配列
$g = array('isshin','toyonaga','dayo');
//連想配列
$j = array();
$j['isshin'] = 1;



echo $g[1];
echo "<br>";
//var_dump($g);
echo $j['isshin'];
//var_dump($j);

echo "<br>";
echo "<br>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- 外部ファイルの読み込みはheadタグ内に記述 -->
	<meta charset="UTF-8">
	<title>basic</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- リンクを設置する　 -->
	<!-- <a href="遷移したいページのurl" title=""></a> -->

<!-- 
	method = get
	urlにパラメータとしてフォームのデータを渡すphpの$_GETで取得する
	ブラウザにもよるが２０００文字程度の制限がある
	使いどころ;
	DBからデータを取得する際に条件などに使用するデータをこのGET送信で作成する


	metohd = post 
	phpの$_POSTで取得する
	送れるデータは無制限
	使いどころ;
	dbへデータを登録する際に、
	データのチェックや実際にdbへ登録するためのデータをこのPOSTで作成する
	画面上にデータは表示されないので、セキュリティを考慮して個人情報送るっ場合になどは
	必ずPOST送信で行う
	-->
	<a href="basic.php" title="">Link</a>
		<!-- <form action="遷移したいページのurl" method="getかpostを入れる">
		実際に画面に出力する入力欄を作成
		<input type="入力欄タイプ" name="入力欄の名前">
		option:
		1,value = "入力欄の初期値"
		2,placeholder = "入力欄の例"

		formパーツは必ずformタグ内に記述すること
		</form> -->
	<form action="basic.php" method="get">
	typetext : <input type="text">

	<br>
	
	mailadress<input type="email" name="">
	
	<br>
	
	password<input type="password" name="">
	
	<br>
	
	typecheckbox :
	<div>

	<input type="checkbox" name="class" value="ios">ios class
	<input type="checkbox" name="class" value="web">Web class
	
	</div typ>


	<br>
	<div>
	<input type="radio" name="member_name" value="0" checked>isshin
	<input type="radio" name="member_name" value="1">isshin
	<input type="radio" name="member_name" value="2">isshin
	<input type="radio" name="member_name" value="3">isshin
	<input type="radio" name="member_name" value="4">isshin
	<input type="radio" name="member_name" value="5">isshin
	</div>

	<br>

	select:
	<div>
		<select name="select">
			<option value="0">Ruby</option>
			<option value="1">PHP</option>
			<option value="2">Python</option>
		</select>
	</div>

	<input type="submit" name="">
	

	</form>

</body>
</html>