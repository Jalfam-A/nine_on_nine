document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector(".menu-toggle");

    navToggle.addEventListener('click', function(){
        console.log("THIS HAS BEEN CLICKED")
        document.querySelector('.main-navigation').classList.toggle('show-nav');
    });
});
