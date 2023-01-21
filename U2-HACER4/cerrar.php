<?php
 session_start();
require_once 'cdn.html';
ob_start();
session_destroy();
header ('location: index.php'); 
 ?>
 