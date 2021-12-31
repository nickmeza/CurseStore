const navMenu = document.getElementById('nav-menu'),
toggleMenu = document.getElementById('toggle-menu'),
closeMenu = document.getElementById('close-menu');

toggleMenu.addEventListener('click',()=>{
    navMenu.classList.toggle('show');
})

closeMenu.addEventListener('click',()=>{
    navMenu.classList.remove('show');
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