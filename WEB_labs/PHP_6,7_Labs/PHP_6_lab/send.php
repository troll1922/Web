<?php
// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();

include ("bd.php");

if (!empty($_SESSION['login']) && !empty($_SESSION['password']))
{
//если существует логин и пароль в сессиях, то проверяем, действительны ли они
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result2 = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password'",$db); 
$myrow2 = mysql_fetch_array($result2); 
if (empty($myrow2['id']))
   {
    exit("Вход на эту страницу разрешен только зарегистрированным пользователям!");
   }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Отправка сообщения</title>
</head>
<body>
<h2>Отправить Ваше сообщение:</h2>
<form action='save_message.php' method='post'>
<p><label>Логин получателя </label><input type='text' name='poluchatel' size='15' maxlength="15"></p>
<textarea cols='43' rows='4' name='text'></textarea><br>
<input type='submit' name='submit' value='Отправить'>
</form>

<?php
	echo "<br></a><a href='index.php'>Главная страница</a>";
?>

</body>
</html>
