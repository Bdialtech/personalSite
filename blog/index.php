<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $lastModify = filemtime(__FILE__); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blog viewing for Brad Dial's website">
        <link rel="stylesheet" href="/css/default.css">
        <link rel="stylesheet" href="/css/blog.css">
        <title>Brad Dial's Thoughts</title>
    </head>
    <body>
        <div class="page">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteHeader.php'; ?>

            <?php 
                include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLconnect.php';

                $currentPage = 1;
                if (isset($_GET['page'])) {
                    $currentPage = htmlspecialchars($_GET['page']);
                }

                $totalPages = 1;
                include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLblogCalcPageCount.php';
            ?>

            <div class="content">       
                <div class="blogInterface">
                    <div class="blogPanel">
                        <p>Sorting and filtering functionality coming soon!</p>
                        <br>
                        <form>
                            <label for="sortType">Sort By:</label><br>
                            <select id="sortType" name="sortType">
                                <option value="date" selected>By Date</option>
                                <option value="alpha">By Title</option>
                            </select><br>
                            <select id="sortDir" name="sortDir">
                                <option value="asc">Ascending</option>
                                <option value="desc" selected>Descending</option>
                            </select><br><br>
                            <label>Tags:</label><br>
                            <input type="checkbox" id="update" name="update" value="Update" checked>
                            <label for="tech">Site Updates </label><br>
                            <input type="checkbox" id="tech" name="tech" value="Tech" checked>
                            <label for="tech">Tech </label><br>
                            <input type="checkbox" id="journal" name="journal" value="Journal" checked>
                            <label for="tech">Journal </label><br>
                            <input type="checkbox" id="game" name="game" value="Game" checked>
                            <label for="tech">Games </label><br>
                            <input type="checkbox" id="philo" name="philo" value="Philo" checked>
                            <label for="tech">Philosophy </label><br><br>
                            <input type="submit" id="submit" value="Apply" disabled>
                        </form>
                    </div>

                    <div class="blogView">
                        <div class="blogNavigation">
                            <ul>
                                <li><button <?php if ($currentPage <= 1) echo "disabled"; ?> onclick="window.location.href = '../blog/index.php?page=1'">First</button></li>
                                <li><button <?php if ($currentPage <= 1) echo "disabled"; ?> onclick="window.location.href = '../blog/index.php?page=<?php echo $currentPage - 1;?>'">Prev</button></li>
                                <li><button <?php if ($currentPage >= $totalPages) echo "disabled"; ?> onclick="window.location.href = '../blog/index.php?page=<?php echo $currentPage + 1; ?>'">Next</button></li>
                                <li><button <?php if ($currentPage >= $totalPages) echo "disabled"; ?> onclick="window.location.href = '../blog/index.php?page=<?php echo $totalPages; ?>'">Last</button></li>
                            </ul>
                            <p><?php echo "Page " . $currentPage . " of " . $totalPages; ?></p>
                        </div>

                        <div class="blogText">
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/restricted/SQLblogRenderEntries.php'; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php include $_SERVER['DOCUMENT_ROOT'].'/objects/siteFooter.php';?>
        </div>
    </body>
</html>