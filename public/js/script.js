window.addEventListener('load', () => document.querySelector('.preloader').classList.add('hidePreLoader'));

function changeImage(imageSrc) {
    document.getElementById('featured-photo').src = imageSrc;
    }