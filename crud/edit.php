<?php
$db= require './base/db.php';
$id=$_GET['id'];
$name=$_GET['name'];
$Description=$_GET['description'];
$price=$_GET['price'];
$image=$_GET['image'];
$link=$_GET['link'];
$db->query("UPDATE menu SET name='{$name}',description='{$Description}',price='{$price}',image='{$image}',link='{$link}' WHERE id='{$id}'");
header('Location: crud.php');
?>