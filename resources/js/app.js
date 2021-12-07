let burgerMenu = document.querySelector('.burger-menu');
let menu = document.querySelector('.menu');
burgerMenu.addEventListener('click', function(e) {
  e.currentTarget.classList.toggle('active');
  menu.classList.toggle('active');
});

let createBtn = document.querySelector('.create-btn');
let closeBtn = document.querySelector('.modal-close');
let overlay = document.querySelector('.modal-overlay');
let modal = document.querySelector('.modal');
let toggleModal = function(e) {
  modal.classList.toggle('hidden');
  modal.classList.toggle('flex');

  e.preventDefault();
}
createBtn.addEventListener('click', toggleModal);
closeBtn.addEventListener('click', toggleModal);
overlay.addEventListener('click', toggleModal);