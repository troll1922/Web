<!DOCTYPE>
<html>
<head>
	<title>PHP</title>
</head>
<meta charset="utf-8">
<body>
<?php
	echo "<h3>Ваше предложение: <I>".$_REQUEST['userText']."</I></h3>";
	$str = $_REQUEST['userText'];
	$arrStr = explode(" ",$str);
	$countArrStr = count($arrStr);
	$arrOtvet = array();
	$strOtvet="";
	$j=0;
	for($i=0;$i<$countArrStr;$i++){
		$buf=iconv_strlen($arrStr[$i],'UTF-8');//используем фун-цию iconv_strlen() для правильного отображения кол-ва символов кирилицы 
		if ($buf<5) {$strOtvet .= $arrStr[$i];}
		else {$arrOtvet[$j]=$arrStr[$i]; $j++;}
	}
	echo "Ответ: <I>";
	$j=0;
	$len = count($arrOtvet);
	while ($j<$len) {echo $arrOtvet[$j]." "; $j++;}
	echo $strOtvet."</I>";
?>
</body>
</html>