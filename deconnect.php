<?php
session_start();
$_SESSION=array();
session_destroy();
echo '<script>document.location.href="index.php"; </script>';
?>