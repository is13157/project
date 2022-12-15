<?php
    $db = require 'db.php';

    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $db->query("INSERT INTO `contact`(text, name, email, subject) VALUES ('{$cmessage}','{$name}','{$from}','{$subject}')")
?>