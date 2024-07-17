<link rel="stylesheet" href="/css/header.css">
<script src="/js/siteHeader.js"></script>
<header>
    <div id="headerContent">
        <button class="headerItem" id="navMenuButton" onclick="toggleDropdownVisibility();"></button>
        <h1 class="headerLogo">Brad Dial</h1>
        <nav id="navList">
            <a class="headerItem" href="/">Home</a>
            <a class="headerItem" href="/blog">Blog</a>
            <a class="headerItem" href="/app">Projects</a>
        </nav>
        <nav id="socials">
            <a class="headerIcon" href="https://www.linkedin.com/in/bdialtech" target="_blank"><img src="/assets/icons/linkedinIcon.png"></a>
            <a class="headerIcon" href="https://github.com/Bdialtech" target="_blank"><img src="/assets/icons/githubIcon.png"></a>
        </nav>
    </div>
    <nav id="dropdownNavList">
        <a class="headerItem" style="display: block;" href="/">Home</a>
        <a class="headerItem" style="display: block;" href="/blog">Blog</a>
        <a class="headerItem" style="display: block;" href="/app">Apps</a>
    </nav>
</header>