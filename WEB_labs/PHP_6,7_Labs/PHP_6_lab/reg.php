<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
</head>
<body>
	<h2>Регистрация</h2>
	<form action="save_user.php" method="post">
		<p>
			<label>Ваш логин:</label><br>
			<input type="text" name="login" size="15" maxlength="15">
		</p>
		<p>
			<label>Ваш пароль:</label><br>
			<input type="password" name="password" size="15" maxlength="15">
		</p>
		<p>
			<input type="submit" name="submit" value="Зарегистрироваться">
		</p>
	</form>
<?php
	echo "<br></a><a href='index.php'>Главная страница</a>";
?>
</body>
</html>