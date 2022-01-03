const navMenu = document.getElementById('nav-menu'),
toggleMenu = document.getElementById('toggle-menu'),
closeMenu = document.getElementById('close-menu');
search__header = document.getElementById('header__search');
header__container__search = document.getElementById('container_real_time');

toggleMenu.addEventListener('click',()=>{
    navMenu.classList.toggle('show');
})

closeMenu.addEventListener('click',()=>{
    navMenu.classList.remove('show');
})
search__header.addEventListener('click',()=>{
    header__container__search.classList.toggle('container_real_time');
})
// const search = document.querySelector('.search');
// const icon = document.querySelector('.icon');
// const input = document.querySelector('.input');
// const clean = document.querySelector('.clean');
// icon.onclick = function () {
//     console.log('buscanding');
// }
// input.onclick = function () {    
//     clean.classList.toggle('clear')
// }

// function input_clear(){
//     document.getElementById('mysearch').value= '';
//     clean.classList.remove('clear');
// }