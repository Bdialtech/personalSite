<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputTitle = $_POST['title'];
        $inputBody = $_POST['body'];
        $inputPass = $_POST['pass'];

        include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLconnect.php';

        include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLupload.php';

        include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLdisconnect.php';

        echo "<script>
                setTimeout(function() {
                    window.location.href = '".$redirectDestination."';
                }, 3000);
              </script>";
              
        exit;
    } else {
        header("Location: ../404.php");
        exit;
    }
?>