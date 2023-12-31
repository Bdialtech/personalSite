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
        <?php include 'objects/siteHeader.php'; ?>
            <div class="content">
               

                <p style="font-style: italic; text-align: center;">All apps will open in a new tab</p>
                <table class="appList">
                    <tr>
                        <th></th>
                        <th>App</th>
                        <th>Description</th>
                        <th>Commissioner</th>
                        <th>Initial Build Date</th>
                    </tr>
                    <tr>
                        <td><button type="button" class="appLauncher" onclick='window.open("/app/rimcalc", "_blank");'>Launch</button></td>
                        <td>RimCalc</td>
                        <td>A simple weekly value tracker for RimWorld</td>
                        <td>RJ Carter</td>
                        <td>August 2023</td>
                    </tr>
                </table>

            </div>

            <?php include 'objects/siteFooter.php'; ?>
        </div>
    </body>
</html>