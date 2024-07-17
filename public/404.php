<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Error 404 page">
        <link rel="stylesheet" href="/css/default.css">
        <title>Error 404</title>
    </head>
    <body>
        <div class="page">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>
            <div class="content">
               

                <h1>Error 404: The requested page doesn't exist.</h1>
            </div>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>

    </body>
</html>