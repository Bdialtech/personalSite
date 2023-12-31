<link rel="stylesheet" href="/css/header.css">
<script src="/js/siteHeader.js"></script>
<header>
    <nav id="navList">
        <ul>
            <li class="headerItem"><a href="/">About Me</a></li>
            <li class="headerItem"><a href="/blog">Blog</a></li>
            <li class="headerItem"><a href="/apps">Apps</a></li>
            <li class="headerItem"><a href="/aboutsite">About The Site</a></li>
        </ul>
    </nav>
    <button class="headerItem" id="navMenuButton" onclick="toggleDropdownVisibility();" aria-label="Navigation"></button>
    <nav id="dropdownNavList">
        <ul>
            <li class="headerItem" style="display: block;"><a href="/">About Me</a></li>
            <li class="headerItem" style="display: block;"><a href="/blog">Blog</a></li>
            <li class="headerItem" style="display: block;"><a href="/apps">Apps</a></li>
            <li class="headerItem" style="display: block;"><a href="/aboutsite">About The Site</a></li>
        </ul>
    </nav>
</header>