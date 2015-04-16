<?php
session_start(); //запускаем сессию. Обязательно в начале страницы
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
   //если логин или пароль не действителен
    exit("Вход на эту страницу разрешен только зарегистрированным пользователям!");
   }
}

if (isset($_POST['text'])) { $text = $_POST['text'];}//получаем текст сообщения
if (isset($_POST['poluchatel'])) { $poluchatel = $_POST['poluchatel'];}//логин получателя
$author = $_SESSION['login'];//логин автора

if (empty($author) || empty($text) || empty($poluchatel)) {//есть ли все необходимые данные? Если нет, то останавливаем
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля");}

$text = stripslashes($text);//удаляем обратные слеши
$text = htmlspecialchars($text);//преобразование спецсимволов в их HTML эквиваленты

$result3 = mysql_query("INSERT INTO messages (author, poluchatel, text) VALUES ('$author','$poluchatel','$text')");//заносим в базу сообщение
if ($result3=='TRUE')
		echo "Сообщение отправлено";
	else 
		echo "Сообщение не отправлено, пользователя с таким именем нет";
		echo "<br></a><a href='index.php'>Главная страница</a>";
?>