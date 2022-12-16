<?php
$db= require 'db.php';
$name=$_GET['name'];
$Description=$_GET['description'];
$price=$_GET['price'];
$image=$_GET['image'];
$link=$_GET['link'];
$db->query("INSERT INTO menu (name, description, price, image, link) VALUES ('{$name}','{$Description}','{$price}','{$image}','{$link}')");
header('Location: crud.php');