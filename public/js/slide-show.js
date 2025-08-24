let slideIndex =1;
const isTheme = localStorage.getItem("theme");
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
} 
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("banner-item");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    if (slideIndex === 2){
        slides[slideIndex-1].style.display = "flex";
        localStorage.setItem("theme", "dark")
        document.querySelector("main").className = "theme-dark";
    }

    if (isTheme === "dark") {
        document.querySelector("main").className = "theme-dark";

    }
    else {
        document.querySelector("main").className = "theme-light";

    }   

    if (slideIndex ===  1){
        slides[slideIndex-1].style.display = "flex"; 
        localStorage.setItem("theme", "light")
    }    
}