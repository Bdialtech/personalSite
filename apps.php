<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/default.css">
        <link rel="stylesheet" href="/css/apps.css">
        <title>Brad Dial's Web Apps</title>
    </head>
    <body>
        <div class="page">
            <div class="content">
                <?php include 'objects/siteHeader.html'; ?>

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
                        <td>R. Nolan</td>
                        <td>August 2023</td>
                    </tr>
                </table>

            </div>

            <?php include 'objects/siteFooter.html'; ?>
        </div>
    </body>
</html>