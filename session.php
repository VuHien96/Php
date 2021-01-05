<?php
session_start();

$_SESSION['color'] = 'Blue';
echo $_SESSION['color'];

session_unset();
session_destroy();
print_r($_SESSION);