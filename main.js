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


