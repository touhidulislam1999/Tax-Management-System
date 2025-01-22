<?php

session_start();

require_once('DBConnection.php');

session_destroy();
header("Location: index.php");

?>