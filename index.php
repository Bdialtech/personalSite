<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Landing page; about Brad Dial">
        <link rel="stylesheet" href="/css/default.css">
        <title>Brad Dial - The Website</title>
        <style>
            #whoAmBlock {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-between;
                width: 90%;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="page">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>

            <div class="content">
                <h2><img src="/assets/images/brad_profile.jpeg" alt="Portrait picture of Brad Dial" style="float: right;width: 25%;min-width: 200px;margin-left: 4%;border-style: ridge;border_width: 1px;border-color: grey;">Who am I?</h2>
                <p>I'm Bradley Dial, aspiring web developer and recent graduate from Pellissippi State Community College in Knoxville, Tennessee. I have a burning passion for creating functional and optimized systems, and a lukewarm passion for sleek and modern visual design.</img></p>
                <br><br>
                <h2>About the Site</h2>
                <p>This website was (and is being) constructed for the purpose of showing my skills and abilities in my own corner of the internet. This site is intended to be a supplement to my resume and LinkedIn profile, to provide as complete of a picture as possible into what I offer a company or organization.</p>
                <br><br>
                <h2>Structure</h2>
                <p>Currently this website is built to purpose - that is to say there's few frills and most things are built from the ground up with as few infrastructures as possible. The majority of the HTML, CSS, and Javascript is completely homebrew, and the stack is as simple as it gets: a LAMP stack.</p>
                <br>
                <p>In this case, specifically, the stack is Linux (Ubunutu), Apache, MySQL, and PHP. The webserver is hosted remotely on an AWS Lightsail Ubuntu machine, and the codebase is hosted on GitHub for version control and rapid deployment, as most production happens on a separate development environment.</p>
                <br>
                <p>Although security isn't exactly a business-critical risk factor for my personal blog site, I have taken basic measures. Despite the codebase being largely public (available <a href="https://github.com/Bdialtech/personalSite/tree/main">here</a>), there are some particular safety precautions I took when implementing my site's database. For example, all MySQL implementation code has been encapsulated into a private Git submodule - the /restricted directory - and then re-injected using PHP's include command. The private code is visible upon request by prospecting employers.</p>
                <br><br>
                <h2>Future Plans</h2>
                <p>While I prefer to work with simpler and lower level technologies, I do want to practice and advertise my skill with newer, fancier tech. At some point I will redesign the site using a modern stack and make the copy available beside this one, and it will use technology such as React, Node.js, and other such modern tooling.</p>
                <br>
                <p>For now though, my interest is in the simpler tools, because I believe that a firm foundational knowledge is more important than knowing the modern tooling. Making things work from scratch by getting your hands dirty is what I love, and will hopefully be more useful than learning a new framework that may or may not be relevant ten years from now.</p>
            </div>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>