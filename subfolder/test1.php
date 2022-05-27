<?php

// Cross-Site Scripting (XSS)
$name = $_GET['name'];
echo('Hello' . $name);


// SQL Injection
$id = $_POST['id'];
mysql_query("SELECT user FROM users WHERE id = " . $id);


