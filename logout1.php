<?php
session_start();
unset($_SESSION['accountno']);
header('Location:atmbanking.php?id=You are Successfully Logout');
?>