<?php

include 'ConfigReg.php';
session_start();
session_unset();
session_destroy();

header('location:../HTML/index.html');

?>
