<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'../../env.php';
    if ($envDebug) {
        ini_set('display_errors', 1);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputTitle = $_POST['title'];
        $inputDesc = $_POST['desc'];
        $inputBody = $_POST['body'];
        $inputPass = $_POST['pass'];

        require $_SERVER['DOCUMENT_ROOT'].'../../restricted/SQLconnect.php';

        require $_SERVER['DOCUMENT_ROOT'].'../../restricted/SQLblogUpload.php';

        require $_SERVER['DOCUMENT_ROOT'].'../../restricted/SQLdisconnect.php';

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