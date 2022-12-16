<?php
/** @var PDO $db */
$id=$_GET['id'];
$db= require 'db.php';
$db->query("DELETE FROM menu WHERE id={$id}" );
header('Location: crud.php');
