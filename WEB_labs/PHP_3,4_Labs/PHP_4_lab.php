<!DOCTYPE>
<html>
<head>
	<title>PHP_4_lab</title>
</head>
<body>
	<?php
		echo "<h4>������������ ������ �4</h4>";
		echo "������� � 14 <I>��������� ��������� ������� ������ (30 ���������) ���������� ������� ���������� �������� �� A �� H � ������� 1 �� �� 5. ��������� ������� �������� ���� ��������� 2 �������. �������� � 1 ������� ������ ������ ������� �� ��� ��������. ��� �������� ���������� �������� ���������� ��������, � ��� ����� ���������.</I><br><br>";
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
		echo "<h3>������� �������� ������� ��.�����-51 ������� �.�.<h3>";
	?>
</body>
</html>
