<?php
if (!empty($_POST["user_name"]))
{
	echo "Получены новые вводные:<br/>";
	echo "Имя - ";
	echo $_POST["user_name"];
}
else
{
echo "Переменные не дошли. Проверьте всё ещё раз.";
}
$fname = "Values.txt";
$fhandle = fopen($fname, 'w') or die ("Невозможно открыть файл");
$user_name = "Имя - " . $_POST["user_name"];
fwrite($fhandle, $user_name);
fclose($fhandle);
/*$user_name = file('Values.txt');
foreach($user_name as $line1)
{
    echo $line1 . "<br/>\n";
};*/
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Наносайт</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<form method="post" action="/index.php">Наносайт для передачи информации:
    <br>
    <br>
    Имя пользователя: <input name="user_name" type="text" maxlength="7" size="25" value=<?php echo $_POST["user_name"] ?>>
    <br>
    <br>
    <input type=submit value="Сохранить">
</form>
<img src="http://avatars-fast.yandex.net/get-direct/6Oubd7Va58iir2E8hcDthA/y90" alt="Риал Нига" />
</body>
</html>