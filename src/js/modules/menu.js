import _ from 'lodash';
const menuButton = document.querySelector(`.hamburger`);
const navigation = document.querySelector(`.navigation`);
const nav_panel  = document.querySelector(`.navigation__panel`);

function initMenu() {
  menuButton.addEventListener('click', onToggleMenu);
  window.addEventListener('scroll', checkMenuVisibility);
}

function onToggleMenu(e) {
  e.preventDefault();
  menuButton.classList.toggle('is-active');
  navigation.classList.toggle('is-active');
  nav_panel.classList.toggle('is-active');
}

const checkMenuVisibility = _.debounce(e => {
  console.log('checking scroll height');
}, 500);

export default initMenu;