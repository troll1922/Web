<!DOCTYPE>
<html>
<head>
	<title>PHP_3_lab</title>
</head>
<body>
	<?php
		echo "<h4>������������ ������ �3</h4>";
		echo "������� � 14 <I>����������� �� ������ �������� ������� ��������, ��������� ������ ����� (��� ��������)</I><br><br>";
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
		echo "<h3>������� �������� ������� ��.�����-51 ������� �.�.<h3>";
	?>
</body>
</html>
