<?php include 'connect.php';

	if (isset($_SESSION['id'])) {
        session_destroy();
        header('Location: ../index.php');
    }else{
        header('Location: ../index.php');
    }

 ?>