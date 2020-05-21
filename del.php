<?php
require('./mysql.php');
$id = isset($_GET['id'])?$_GET['id']:null;
$shuju = sql($con,"DELETE FROM lyb WHERE id=$id");
header("Location: show.php");