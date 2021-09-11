<?php
session_start();
setcookie("User_id", "", time() - 60);
setcookie("Username","", time() - 60);
if (session_destroy()) {
          header("Location: index.html");  
}
