<?php
$id=$_GET['id'];
$db= require 'db.php';
$item =$db ->query("SELECT  * FROM menu WHERE  id={$id}")->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="edit.php" method="get">
    <input  type="hidden" name="id" value="<?=$item['id'] ?? ''?>" >
    <input type="text" value="<?=$item['name'] ?? ''?>" name="name" placeholder="Name">
    <input type="text" value="<?=$item['description'] ?? ''?>" name="description" placeholder="Описание">
    <input type="text" value="<?=$item['price'] ?? ''?>" name="price" placeholder="Цена">
    <input type="text" value="<?=$item['image'] ?? ''?>" name="image" placeholder="Фото">
    <input type="text" value="<?=$item['link'] ?? ''?>" name="link" placeholder="Ссылка">
    <button type="submit">Редактировать</button>
    <a href="crud.php">Вернуться</a>
</form>
</body>
</html>