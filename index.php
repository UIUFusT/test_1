<?php


$fileName = "Values.txt";

if (array_key_exists("user_name", $_POST)) {
    $name = $_POST["user_name"];
    //echo "Получены новые вводные: " . $name . "<br/>";
    file_put_contents($fileName, $name);
}
$name = file_get_contents($fileName);
//echo "Имя из файла - " . $name . "<br/>";

?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Наносайт</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
</head>
<body>
<form method="post" action="/index.php">Наносайт для передачи информации:
    <br>
    <br>
    Имя пользователя: <input name="user_name" type="text" size="25" value="<?php echo $name; ?>">
    <br>
    <br>
    <input type=submit value="Сохранить">
</form>
<img src="http://avatars-fast.yandex.net/get-direct/6Oubd7Va58iir2E8hcDthA/y90" alt="Риал Нига"/>
</body>
</html>