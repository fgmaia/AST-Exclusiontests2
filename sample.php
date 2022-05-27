<?php

// Command Injection
$cmd = $_COOKIE['cmd'];
exec("cat /var/log/apache2/access.log | grep " . $cmd);

// Deprecated Function
$words = split(":", "split:this");

