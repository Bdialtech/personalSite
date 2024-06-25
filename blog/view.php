<?php
    $FAIL_TO_VIEW = false;

    require $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLconnect.php';

    if (!isset($_GET['query'])) {
          $FAIL_TO_VIEW = true;
    }

    $INT_CAST_QUERY = (int) $_GET['query'];
    require $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLblogGetCount.php';
    if ($INT_CAST_QUERY > $entryCount || $INT_CAST_QUERY <= 0) {
        $FAIL_TO_VIEW = true;
    }

    if ($FAIL_TO_VIEW == true) {
        header("Location: ../blog/index");
        exit;
    }

    $ENTRY_ID = $INT_CAST_QUERY;
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Individual blog post">
        <link rel="stylesheet" href="/css/default.css">
        <link rel="stylesheet" href="/css/blogEntry.css">
        <title><?php include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLblogGetTitle.php'; ?> - Brad Dial's Blog</title>
    </head>
    <body>
        <div class="page">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>

            <div class="content">       
                <?php    
                    require $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLblogRenderWholeEntry.php';
                    require $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLdisconnect.php';
                ?>
            </div>

            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>