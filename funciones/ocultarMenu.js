document.addEventListener('DOMContentLoaded', function () {
    var mobileMenu = document.querySelector('.navbar-collapse');
    var menuToggle = document.getElementById('navbar-toggle');

    menuToggle.addEventListener('click', function () {
        if (mobileMenu.classList.contains('show')) {
            mobileMenu.classList.remove('show');
        } else {
            mobileMenu.classList.add('show');
        }
    });
});
