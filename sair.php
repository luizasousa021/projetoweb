<?php
session_start();
session_destroy();

$msg = "Logout efetuado";
header("location:index.php?msg=".$msg);

?>