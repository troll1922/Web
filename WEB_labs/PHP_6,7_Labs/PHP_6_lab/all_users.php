<?php
// ��� ��������� �������� �� �������. ������ � ��� �������� ������ ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� � ����� ������ ���������!!!
session_start();

include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 

if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
//���� ���������� ����� � ������ � �������, �� ���������, ������������� �� ���
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result2 = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password'",$db); 
$myrow2 = mysql_fetch_array($result2); 
if (empty($myrow2['id']))
   {
   //���� ������ ������������ �� �����
    exit("���� �� ��� �������� �������� ������ ������������������ �������������!");
   }
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>������ �������������</title>
</head>
<body>
<h2>������ �������������</h2>


<?php
$result = mysql_query("SELECT login,id FROM users ORDER BY login",$db); //��������� ����� � ������������� �������������
$myrow = mysql_fetch_array($result);
do
{
//������� �� � �����
printf("%s<br>",$myrow['login']);
}
while($myrow = mysql_fetch_array($result));
echo "<br></a><a href='index.php'>������� ��������</a>";
?>
</body>
</html>
