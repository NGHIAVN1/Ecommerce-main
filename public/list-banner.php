<!DOCTYPE html>
<html lang="en">
<head>
        <link href="css/list-banner.css" rel="stylesheet">

</head>
<body>
    <div class="list-banner">
        <div class="grid-container">
            <a href="">
                <div class="item fade">
                    <img src="img/banner/banner1.webp" alt="Banner 1">
                </div>
            </a>
            <a href="">
                 <div class="item fade">
                <img src="img/banner/banner2.webp" alt="Banner 2">
            </div>
            </a>
            <a href="">
                <div class="item fade">
                    <img src="img/banner/banner3.webp" alt="Banner 3">
                </div>
            </a>
             <a href="">
                 <div class="item fade">
                <img src="img/banner/banner4.webp" alt="Banner 2">
            </div>
            </a>
            <a href="">
                <div class="item fade">
                    <img src="img/banner/banner5.webp" alt="Banner 3">
                </div>
            </a>
        </div>
    </div>
    <script>
    let bannerIndex = 0;
    showBanners();

    function showBanners() {
        const slides = document.getElementsByClassName("item");
        // Hide all slides
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            slides[i].classList.remove('show');
        }
        
        // Show current and next slide
        bannerIndex = (bannerIndex + 1) % slides.length;
        let nextIndex = (bannerIndex + 1) % slides.length;
        
        slides[bannerIndex].style.display = "block";
        slides[nextIndex].style.display = "block";
        
        // Add animation class
        setTimeout(() => {
            slides[bannerIndex].classList.add('show');
            slides[nextIndex].classList.add('show');
        }, 100);

        setTimeout(showBanners, 2000);
    }
    </script>
</body>

</html>