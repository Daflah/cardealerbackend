window.addEventListener('load', () => document.querySelector('.preloader').classList.add('hidePreLoader'));



//carousel
var slideIndex = 1;
        showSlide(slideIndex);

        function nextSlide(n){
            showSlide(slideIndex += n);
        }

        function dotSlide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n){
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dots = document.getElementsByClassName("dot");

            if (n > slides.length){
                slideIndex = 1;
            }

            if (n < 1){
                slideIndex = slides.length;
            }

            for (i = 0; i < slides.length; i++){
                slides[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        
function changeImage(imageUrl) {
    document.getElementById('featured-photo').src = imageUrl;
    }