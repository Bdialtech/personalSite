<?php
    if (isset($_GET['query'])) {
        require $_SERVER['DOCUMENT_ROOT'].'../../restricted/SQLconnect.php';

        $entryNum = $_GET['query'];
        require $_SERVER['DOCUMENT_ROOT'].'../../restricted/SQLblogQueryFunctions.php';
    }
    else {
        header("Location: ../blog/index");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php getEntryDescription($entryNum, $conn) ?>">
        <link rel="stylesheet" href="/css/default.css">
        <link rel="stylesheet" href="/css/blogEntry.css">
        <title><?php getEntryTitle($entryNum, $conn); ?> - Brad Dial's Blog</title>
    </head>
    <body>
        <div class="page">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>

            <div class="content">       
                <?php    
                    renderBlogEntry($entryNum, $conn);
                    require $_SERVER['DOCUMENT_ROOT'].'../../restricted/SQLdisconnect.php';
                ?>
            </div>

            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>