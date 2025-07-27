<?php
session_start();
session_destroy();
header("Location: kurye-login.html");
exit;
?>
