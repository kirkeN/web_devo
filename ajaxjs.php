<?php
require_once ("config.ini");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Cannot connect- ".mysqli_error());
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Cannot connect to base utf-8 - ".mysqli_error($connection));

$promptWish = mysqli_real_escape_string($connection,$_POST['data']);     // gets the data it received from the request

$query =mysqli_query($connection,"INSERT INTO bday_wish(wish) VALUES('$promptWish')");



//table bday_wish (id, wish (varchar 500)
