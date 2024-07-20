<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Content description">
        <link rel="stylesheet" href="/css/default.css">
        <title>Upload New Blog Entry</title>
    </head>
    <body>
        <div class="page">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>

            <div class="content">       
                <form action="uploadBlogEntry.php" method="post">
                    <label for="title">Title</label><br>
                    <input type="textbox" id="title" name="title" size="50" maxlength="256" required><br>
                    <label for="desc">Description</label><br>
                    <input type="textbox" id="desc" name="desc" size="50" maxlength="256" required><br>
                    <label for="body">Body</label><br>
                    <textarea id="body" name="body" rows="16" cols="75" required></textarea><br>
                    <label for="pass">Password</label><br>
                    <input type="password" id="pass" name="pass" size="256" maxLength="512" required><br>
                    <input type="submit" value="Upload">
                </form>
            </div>

            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>