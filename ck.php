<?php
require('./mysql.php');
$id = isset($_GET['id'])?$_GET['id']:null;
$sql = $id?"SELECT * FROM lyb where id = $id":'SELECT * FROM lyb';
$shuju = sql($con,$sql);