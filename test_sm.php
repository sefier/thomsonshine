<?php
fsockopen('smtp.163.com', 25, $errno, $errstr, 30);
var_dump($errno);
var_dump($errstr);
