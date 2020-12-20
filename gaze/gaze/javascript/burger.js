const navSlide = () => {
    const burger = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.list-nav');

    burger.addEventListener('click', ()=>{
        nav.classList.toggle('list-active');
    })
}
navSlide();
