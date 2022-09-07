<?php

    if ($_SESSION['auth_role'] != "2") {
        // code...
        $_SESSION['message'] = "You are not authorized to access SUPERADMIN";
        header("Location: index.php");
        exit(0); 
    }

?>