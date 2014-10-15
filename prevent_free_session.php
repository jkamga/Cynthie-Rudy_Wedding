<?php
session_start();
if( $_SESSION['current_user'] == null){
header("Location: http://localhost/Cynthie-Rudy_Wedding/index.html"); /* Redirect browser */
/* Make sure that code below does not get executed when we redirect. */
exit;
}
?>