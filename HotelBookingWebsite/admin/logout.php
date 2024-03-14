<?php
 require('inc/esssentials.php');
 session_start();
 session_destroy();
 redirect('admin.php');

?>