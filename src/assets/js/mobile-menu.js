const hamburger = document.getElementById('hamburger');
const menu = document.querySelector('.mobile');
const menuLink = document.querySelector('.nav-menu__item a')

//отслеживание клика по бургеру
hamburger.addEventListener('click', function (event) {
    this.classList.toggle('is-active');
    console.log(this);

    if(!menu.classList.contains('open')) {
        document.body.style.overflow = 'hidden';
        menu.classList.add('open');
    } else {
        document.body.style.overflow = 'auto';
        menu.classList.remove('open');
    }
});

//клик по ссылке меню - если мобилка открыта, закрываем.
menuLink.addEventListener('click', function(event) {
    if(menu.classList.contains('open')) {
        document.body.style.overflow = 'auto';
        menu.classList.remove('open');
    }
});

