<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Landing page; about Brad Dial">
        <link rel="stylesheet" href="/css/default.css">
        <title>Brad Dial - Who Am I?</title>
    </head>
    <body>
        <div class="page">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>

            <div class="content">
                <h2>Who am I?</h2>
                <p>I'm Bradley Dial, aspiring web developer and recent graduate from Pellissippi State Community College in Knoxville, Tennessee.</p>
            </div>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>