// MENU BAR
let nav = document.getElementsByTagName('nav')[0];

// abrir menu:
let menu = document.getElementsByClassName('menuMob')[0]
menu.addEventListener('click', ()=>{
    nav.classList.add('openMenu');
    menu.classList.add('menuRight');
});

// cerrar menu:
let cerrar = document.getElementById('close');
cerrar.addEventListener('click', ()=>{
    nav.classList.add('closeMenu');
    menu.classList.add('closeMenuRight');
    window.setTimeout(()=>{
        nav.classList.remove('openMenu', 'closeMenu');
        menu.classList.remove('menuRight', 'closeMenuRight');
    }, 500);
});

// Placeholders en formulario de comentarios:
document.getElementById('comment').setAttribute('placeholder', 'Escribe aquí tu comentario');
document.getElementById('author').setAttribute('placeholder', 'Nombre *');
document.getElementById('email').setAttribute('placeholder', 'Email *');
document.getElementById('url').setAttribute('placeholder', 'Web');


