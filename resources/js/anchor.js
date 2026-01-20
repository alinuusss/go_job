document.body.addEventListener('click', event => {

    const target = event.target;

    if (target.href && target.getAttribute("href").includes('#')) {

        let menu = document.querySelector('.menu.show');

        if (menu) {
            menu.classList.remove('show');
        }

        let href = target.getAttribute("href");

        href = href.match(/#(.+)/)[0];

        let element = document.querySelector(href);

        if (element) {
            event.preventDefault();
            window.scrollTo({top: element.offsetTop - 120, behavior: 'smooth'});
        }
    }

})
