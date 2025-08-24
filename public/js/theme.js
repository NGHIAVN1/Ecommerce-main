function changeThemeDark() {
    if(localStorage.getItem("theme") === "light") {
        localStorage.setItem("theme", "dark");
        document.getElementsByClassName("banner-1").style.display = "none";
        document.getElementsByClassName("banner-2").style.display = "block";
        // document.getElementById("theme-light")[0].className = "theme-dark";
    }
}

function changeThemeLight() {
    if(localStorage.getItem("theme") === "dark") {
        localStorage.setItem("theme", "light");
        document.getElementsByClassName("banner-2").style.display = "none";
        document.getElementsByClassName("banner-1").style.display = "block";
        // document.getElementById("theme-dark").className = "theme-light";
    }
}