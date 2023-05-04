<!-- ----- LOGOUT ----- -->
<?php
    session_start();
    session_destroy();
    header("location: ../apps/singin.php")
?>