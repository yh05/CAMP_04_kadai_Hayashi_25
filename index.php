<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet"  href="style.css">
	<!-- jQueryのCDNを使ったjQueryファイルの読み込み
     jQueryを使用可能にする-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Javaファイルを紐づける -->
	<script src="plus.js"></script>

</head>
<body>

<div class="header-item"><img src="header.png" alt=""></div>

<button id="start">スタート</button>

<h1 class="question-text">何を出すか選んでね</h1>



<div class="me">
<form action="" method="post">
    <button type="submit" name="choice" value="グー">グー</button>
    <button type="submit" name="choice" value="チョキ">チョキ</button>
    <button type="submit" name="choice" value="パー">パー</button>
</form>

</div>


<div class="game">


<?php	


// 結果を代入する変数
$kekka = false;
$win = 0;




// ポスト変数が存在するか
if (isset($_POST['choice'])) {
    $janken = array(
        'グー',
        'チョキ',
        'パー'
	);

	$player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');
   
	$aite = $janken[array_rand($janken)];

if ($player === 'グー' && $aite=== 'チョキ') {
	$kekka = '勝ち';
	$win++;
} elseif ($player === 'グー' && $aite === 'グー') {
	$kekka = 'あいこ';
	$win = 0;
} elseif ($player === 'グー' && $aite === 'パー') {
	$kekka = '負け';
	$win = 0;
} elseif ($player === 'チョキ' && $aite === 'グー') {
	$kekka = '負け';
	$win = 0;
} elseif ($player === 'チョキ' && $aite === 'チョキ') {
	$kekka= 'あいこ';
	$win = 0;
} elseif ($player === 'チョキ' && $aite === 'パー') {
	$kekka = '勝ち';
	$win++;
} elseif ($player === 'パー' && $aite === 'グー') {
	$kekka = '勝ち';
	$win++;
} elseif ($player === 'パー' && $aite === 'チョキ') {
	$kekka = '負け';
	$win = 0;
} elseif ($player === 'パー' && $aite === 'パー') {
	$kekka = 'あいこ';
	$win = 0;
} else{
echo"あいこ";
$win = 0;
}
}
?>

</div>


<div class=shohai>
<?php if ($kekka) : ?>
    <p>結果</p>

    <p>
    あなた：<?php echo $player; ?><br>
    あいて：<?php echo $aite; ?>
	</p>
	
</div>	

<div class=shohai2>
	<p><?php echo $kekka; ?>です。</p>

</div>	
<?php endif; ?>


<div class=renzoku>	
<p id="counter">0</p>
<p>連勝回数は<?php echo $win; ?>です。</p>

</div>



</body>
</html>
