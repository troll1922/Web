<?php
session_start();
include ("bd.php");

if (!empty($_SESSION['login']) && !empty($_SESSION['password'])) {
	$login = $_SESSION['login'];
	$password = $_SESSION['password'];
	$result = mysql_query("SELECT id FROM users WHERE login='$login' && password='$password'",$db); 
	$myrow = mysql_fetch_array($result);
if (empty($myrow['id']))
    exit("Вход на эту страницу разрешен только зарегистрированным пользователям!");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Входящие сообщения</title>
</head>
<body>
<h2>Пользователь "<?php echo $_SESSION['login']; ?>"</h2>
<p>Личные сообщения:</p>
<?php
$login = $_SESSION['login'];
$tmp = mysql_query("SELECT * FROM messages WHERE poluchatel='$login' ORDER BY id DESC",$db); 
$messages = mysql_fetch_array($tmp);//извлекаем сообщения пользователя, сортируем по идентификатору в обратном порядке, т.е. самые новые сообщения будут вверху

if (!empty($messages['id'])) {
do //выводим все сообщения в цикле
  {
$author = $messages['author'];
//$myrow = mysql_fetch_array($result);
$text = $messages['text'];
echo "Автор сообщения: ".$author."<br>";
echo "Текст сообщения: ".$text."<br>";
  }
  while($messages = mysql_fetch_array($tmp));

                    }
					else {
					//если сообщений не найдено
					echo "Сообщений нет";
					}
	echo "<br></a><a href='index.php'>Главная страница</a>";				
?>
</body>
</html>
