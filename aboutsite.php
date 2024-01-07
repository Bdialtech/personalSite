<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Detailed description of the site's construction">
        <link rel="stylesheet" href="/css/default.css">
        <title>Brad Dial - What's This Site?</title>
    </head>
    <body>
        <div class="page">
        <?php include 'objects/siteHeader.php'; ?>

            <div class="content">
                <h2>Abstract</h2>
                <p>This website was (and is being) constructed for the purpose of showing my skills and abilities in my own corner of the internet. This site is intended to be a supplement to my resume and LinkedIn profile, to provide as complete of a picture as possible into what I offer a company or organization.</p>
                <br><br>
                <h2>Structure</h2>
                <p>Currently (as of October, 2023) this website is built to purpose - that is to say there's few frills and most things are built from the ground up with as few infrastructures as possible. The majority of the HTML, CSS, and Javascript is completely homebrew, and the stack is as simple as it gets: a LAMP stack.</p>
                <br>
                <p>In this case, specifically, the stack is Linux (Ubunutu), Apache, MySQL, and PHP. The webserver is hosted remotely on an AWS Lightsail Ubuntu machine, and the codebase is hosted on GitHub for version control and rapid deployment, as most production happens on a separate development environment.</p>
                <br><br>
                <h2>Future Plans</h2>
                <p>Eventually, as I learn more tools and have the time to implement them, more and more less essential components will be added solely to show my capacity in working with them. These things include containerization tools like Docker, frameworks like Bootstrap and React, and a more modern back-end, such as Node.js.</p>
            </div>

            <?php include 'objects/siteFooter.php'; ?>
        </div>
    </body>
</html>