<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/default.css">
        <title>Error 404</title>
    </head>
    <body>
        <div class="page">
            <div class="content">
                <?php include 'objects/siteHeader.php'; ?>

                <h1>Error 404: The requested page doesn't exist.</h1>
            </div>

        <?php include 'objects/siteFooter.php'; ?>
        </div>

    </body>
</html>