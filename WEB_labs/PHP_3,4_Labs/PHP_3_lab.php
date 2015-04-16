<!DOCTYPE>
<html>
<head>
	<title>PHP_3_lab</title>
</head>
<body>
	<?php
		echo "<h4>Лабораторная работа №3</h4>";
		echo "Вариант № 14 <I>Распечатать на экране монитора таблицу символов, используя только циклы (без массивов)</I><br><br>";
		$codeA = ord("A");
		$codeE = ord("E");
		for ($codeE;$codeA<=$codeE;$codeE--){
			$char_buf = $codeA;
			$char_buf2 = $codeE;
			do {
				echo chr($char_buf)." ";
				$char_buf++;
			} while ($char_buf<=$char_buf2);
			echo "<br>";
		}
		echo "<h3>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.<h3>";
	?>
</body>
</html>
