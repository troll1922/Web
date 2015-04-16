<!DOCTYPE>
<html>
<head>
	<title>PHP_4_lab</title>
</head>
<body>
	<?php
		echo "<h4>Лабораторная работа №4</h4>";
		echo "Вариант № 14 <I>Заполните случайным образом массив (30 элементов) поочередно буквами латинского алфавита от A до H и цифрами 1 от до 5. Посчитать среднее значение всех элементов 2 массива. Заменить в 1 массиве каждый второй элемент на это значение. Для контроля результата сделайте распечатку массивов, в том числе исходного.</I><br><br>";
		$arrayChar = array();
		$arrayInt = array();
		$arrayNew = array();
		$codeA = ord("A");
		$codeH = ord("H"); 
		$countInt = 0;
		for ($i=0;$i<30;$i++) {
			$intBuf = rand(1,5);
			$arrayInt[$i] = $intBuf;
			$charBuf = rand($codeA,$codeH);
			$arrayChar[$i] = chr($charBuf);
			$countInt += $intBuf;
		}
		$middleInt = round($countInt/count($arrayInt));
		$arrayNew = $arrayChar;
		for ($j=1;$j<30;$j+=2){
			$arrayNew[$j] = $middleInt;
		}  
		for ($n=0;$n<3;$n++){
			$arrayPrint = array();
			if ($n==0)$arrayPrint = $arrayChar;
			if ($n==1) $arrayPrint = $arrayInt;
			if($n==2) $arrayPrint = $arrayNew;
			for ($k=1;$k<=30;$k++){
				echo $arrayPrint[$k-1]." ";
				if ($k%5==0 && $k!==0) echo "<br>";
			}
			echo "<br>";
		}
		echo "<h3>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.<h3>";
	?>
</body>
</html>
