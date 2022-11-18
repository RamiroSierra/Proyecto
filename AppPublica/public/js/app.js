/*Menu Hamburguesa*/
const iconoMenu = document.querySelector('#icono-menu'),
      menu = document.querySelector('#menu');

iconoMenu.addEventListener('click', (e) => {
  //Alternamosa el estilo para el menu y el body
  menu.classList.toggle('active');
})