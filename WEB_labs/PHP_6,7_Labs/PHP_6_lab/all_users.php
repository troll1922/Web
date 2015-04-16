<?php
// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();

include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
//если существует логин и пароль в сессиях, то проверяем, действительны ли они
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result2 = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password'",$db); 
$myrow2 = mysql_fetch_array($result2); 
if (empty($myrow2['id']))
   {
   //если данные пользователя не верны
    exit("Вход на эту страницу разрешен только зарегистрированным пользователям!");
   }
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Список пользователей</title>
</head>
<body>
<h2>Список пользователей</h2>


<?php
$result = mysql_query("SELECT login,id FROM users ORDER BY login",$db); //извлекаем логин и идентификатор пользователей
$myrow = mysql_fetch_array($result);
do
{
//выводим их в цикле
printf("%s<br>",$myrow['login']);
}
while($myrow = mysql_fetch_array($result));
echo "<br></a><a href='index.php'>Главная страница</a>";
?>
</body>
</html>
