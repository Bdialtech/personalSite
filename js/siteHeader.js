window.onresize = clearDropdownOnLargeScreen;

function toggleDropdownVisibility() {
    nav = document.getElementById("dropdownNavList");
    if (!nav.style.display || nav.style.display == "none") {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
    
}

function clearDropdownOnLargeScreen() {
    if (window.innerWidth > 768) {
        document.getElementById("dropdownNavList").style.display = "none";
    }
}