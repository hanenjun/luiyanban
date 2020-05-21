<?php
require('./mysql.php');
$id = isset($_POST['id'])?$_POST['id']:null;
$title = isset($_POST['title'])?$_POST['title']:null;
$author = isset($_POST['author'])?$_POST['author']:null;
$content = isset($_POST['content'])?$_POST['content']:null;
$shuju = sql($con,"UPDATE lyb SET  title='$title' , author='$author' , content='$content' where id = '$id'");
header("Location: show.php");