<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Brad Dial's apps and programs that are available for viewing">
        <link rel="stylesheet" href="/css/default.css">
        <link rel="stylesheet" href="/css/apps.css">
        <title>Brad Dial's Web Apps</title>
    </head>
    <body>
        <div class="page">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>
            <div class="content">
                
                <p style="font-style: italic; text-align: center;">All apps will open in a new tab</p>
                <br><br>

                <div class="appListing">
                    <picture>
                        <source media="(min-width: 769px)" srcset="/assets/appThumbnails/rimCalc_desktop.webp">
                        <source media="(max-width: 768px)" scrset="/assets/appThumbnails/rimCalc_mobile.webp">
                        <img src="/assets/appThumbnails/rimCalc_mobile.webp" alt="Thumbnail for the RimCalc app" onclick='window.open("rimcalc", "_blank");'>
                    </picture>
                    <div class="appDesc">
                        <h1><a href="rimcalc" target="_blank">RimCalc</a></h1>
                        <h2>August 2023</h2>
                        <p>Simple value tracker with weekly stepping, forward and backward, for the popular video game, Rimworld. Commisioned by RJ Carter.</p>
                    </div>
                </div>

            </div>

            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>