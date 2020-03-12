<?php
// *** Logout the current user.
$logoutGoTo = "../index.html";
if (!isset($_SESSION)) {
    session_start();
} else {
    header("location:../login.html");
}
$_SESSION['idno'] = NULL;
unset($_SESSION['idno']);
if ($logoutGoTo != "") {
    header("Location: $logoutGoTo");
    session_destroy();
    exit;
}
?>