<?php
	session_start();
	if (isset($_POST['login'])) {
		$login = $_POST['login'];
		if ($login == '') {
			unset($login);
		}
	}
	if (isset($_POST['password'])){
		$password = $_POST['password'];
		if ($password == ''){
			unset($password);
		}
	}
	if (empty($login)||empty($password)) 
		exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
	$login = trim($login);
	$password = trim($password);
	
	include ("bd.php");
	$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['password'])) 
		exit ("��������, �������� ���� login ��� ������ ��������.");
	else {
		if ($myrow['password']==$password) {
			$_SESSION['login']=$myrow['login'];
			$_SESSION['id']=$myrow['id'];
			echo "�� ������� ����� �� ����! <a href='index.php'>������� ��������</a>";
		}
			else 
				exit ("��������, �������� ���� login ��� ������ ��������.");
		}
?>