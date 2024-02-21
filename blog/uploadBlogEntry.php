<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputTitle = $_POST['title'];
        $inputBody = $_POST['body'];

        include $_SERVER['DOCUMENT_ROOT'].'/objects/SQLconnect.php';



        include $_SERVER['DOCUMENT_ROOT'].'/objects/SQLdisconnect.php';
    } else {
        header("Location: ../404.php");
        exit;
    }
?>