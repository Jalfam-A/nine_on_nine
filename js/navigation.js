

const navToggle = document.querySelector(".menu-toggle");

navToggle.addEventListener('click', function(){
    document.querySelector('.menu').classList.toggle('show-nav');
});