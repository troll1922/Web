<?php
session_start(); //��������� ������. ����������� � ������ ��������
include ("bd.php"); 

if (!empty($_SESSION['login']) && !empty($_SESSION['password']))
{
//���� ���������� ����� � ������ � �������, �� ���������, ������������� �� ���
	$login = $_SESSION['login'];
	$password = $_SESSION['password'];
	$result2 = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password'",$db); 
	$myrow2 = mysql_fetch_array($result2); 
if (empty($myrow2['id']))
   {
   //���� ����� ��� ������ �� ������������
    exit("���� �� ��� �������� �������� ������ ������������������ �������������!");
   }
}

if (isset($_POST['text'])) { $text = $_POST['text'];}//�������� ����� ���������
if (isset($_POST['poluchatel'])) { $poluchatel = $_POST['poluchatel'];}//����� ����������
$author = $_SESSION['login'];//����� ������

if (empty($author) || empty($text) || empty($poluchatel)) {//���� �� ��� ����������� ������? ���� ���, �� �������������
exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����");}

$text = stripslashes($text);//������� �������� �����
$text = htmlspecialchars($text);//�������������� ������������ � �� HTML �����������

$result3 = mysql_query("INSERT INTO messages (author, poluchatel, text) VALUES ('$author','$poluchatel','$text')");//������� � ���� ���������
if ($result3=='TRUE')
		echo "��������� ����������";
	else 
		echo "��������� �� ����������, ������������ � ����� ������ ���";
		echo "<br></a><a href='index.php'>������� ��������</a>";
?>