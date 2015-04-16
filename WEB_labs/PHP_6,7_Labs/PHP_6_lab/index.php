<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Главная страница</title>
</head>
<body>
	<h2>Главная страница</h2>
	<form action="testreg.php" method="post">
		<p>
			<label>Ваш логин:</label><br>
			<input type="text" name="login" size="15" maxlength="15">
		</p>
		<p>
			<label>Ваш пароль:</label><br>
			<input type="password" name="password" size="15" maxlength="15">
		</p>
		<p>
			<input type="submit" name="submit" value="Войти">
		</p>
		<p>
			<a href="reg.php">Зарегистрироваться</a>
		</p>
	</form>
<?php
	if (empty($_SESSION['login']) || empty($_SESSION['id'])) 
		echo "Вы вошли на сайт, как гость";
	else 
		echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a href='post.php'>Входящие сообщения</a><br><a href='send.php'>Отправить сообщение</a><br><a href='all_users.php'>Список пользователей</a>";
?>
</body>
</html>
