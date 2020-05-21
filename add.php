<?php
require('./mysql.php');
$title = isset($_POST['title'])?$_POST['title']:null;
$author = isset($_POST['author'])?$_POST['author']:null;
$content = isset($_POST['content'])?$_POST['content']:null;
$shuju = sql($con, "INSERT INTO lyb (title, author, content) VALUE ('$title','$author','$content')");
header("Location: show.php");