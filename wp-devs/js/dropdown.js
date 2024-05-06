let dropdown = document.querySelector('.menu'), // ul
submenu = document.querySelector('.sub-menu'), // ul li ul
buttonClick = document.querySelector('.check-button'), // button
humburger = document.querySelector('.menu-icon');

buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle( 'show-dropdown');
    if(submenu){
        submenu.classList.toggle('show-dropdown');

    }
    humburger.classList.toggle('animate-button');
})
//buttonclick adicionado um evendo de click para mudar o comportamento do menu, para que ele fique alinhado verticalmente abaixo, aparecendo
//a condicao if ira definir se ira aparecer uma aparencia desejada