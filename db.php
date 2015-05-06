<?php
$connection = pg_connect('host=localhost port=5432 dbname=test user=postgres password=postgres');



if (array_key_exists('doInsert', $_POST)) {
    $sql = "INSERT INTO Shopping_list (type,name,quantity,measure,note) VALUES ('Фрукты','Манго',6,'шт','Индонезия')";
    pg_query($connection, $sql);
}


$result = pg_query($connection, "SELECT id, type, name, quantity, measure, note FROM Shopping_list");
$rows = pg_fetch_all($result);

foreach ($rows as $row) {
    var_dump($row);
    echo "<br />";
}

pg_close($connection);

?>


Сделать нормальную табличку с использованием тега table, с заголовками типа "Название", "Ед изм"
Внизу должна быть кнопка "Создать", которая создает новую запись в бд.
Последний столбец таблицы должен называться "операции" и содержать конпки операций для каждой строки:
    "Просмотреть", "Редактировать", "Удалить"

Операции должны показывать отдельные формы, без показа сипска покупок.
Просмотреть и Редактировать должны показывать формы как в МЧС - слева название, справа значение или поле ввода.




<!DOCTYPE HTML>
<html>
<head>
    <title>Наносайт</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
</head>
<body>
<form method="post" action="/db.php">
    <input name="doInsert" type="hidden" value="do">
    <input type=submit value="Вставить">
</form>



</body>
</html>