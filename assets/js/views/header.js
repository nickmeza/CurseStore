const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('toggle-menu'),
    closeMenu = document.getElementById('close-menu');
search__header = document.getElementById('header__search');
header__container__search = document.getElementById('container_real_time');

toggleMenu.addEventListener('click', () => {
    navMenu.classList.toggle('show');
})

closeMenu.addEventListener('click', () => {
    navMenu.classList.remove('show');
})
search__header.addEventListener('click', () => {
    header__container__search.classList.toggle('container_real_time');
})

function search(ele) {
    console.log("inside");
    console.log(ele.value);
    if (event.key === 'Enter') {
        valor__search = ele.value;
        console.log(valor__search);
        window.location.href = `${url}curso/buscar/${valor__search}`;
    }
}