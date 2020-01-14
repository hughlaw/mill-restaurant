import _ from 'lodash';
const menuButton = document.querySelector(`.hamburger`);
const navigation = document.querySelector(`.navigation`);
const nav_panel  = document.querySelector(`.navigation__panel`);

function initMenu() {
  menuButton.addEventListener('click', onToggleMenu);
  window.addEventListener('scroll', checkMenuVisibility, { passive: true });
  initMenuItems();
}

function initMenuItems() {
  const menu_links = document.querySelectorAll('.navigation__item');
  menu_links.forEach(link => {
    link.addEventListener('click', onToggleMenu);
  })
}

function onToggleMenu(e) {
  const isSmallScreen = window.innerWidth < 700;

  if (isSmallScreen) {
    menuButton.classList.toggle('is-active');
    navigation.classList.toggle('is-active');
    nav_panel.classList.toggle('is-active');
  }

  if (e.target.classList.contains('navigation__link')) {
    _.delay(() => {
      window.scrollTo({
        top: window.scrollY - 60,
        behavior: 'smooth'
      })
    }, 1);
  }
}

const checkMenuVisibility = _.throttle(e => {
  const viewport_height = window.innerHeight;
  const scroll_length   = window.scrollY;
  const nav_bg          = document.querySelector('.navigation__bg');

  if (scroll_length > viewport_height) {
    nav_bg.classList.add('is-active');
  } else {
    nav_bg.classList.remove('is-active');
  }
}, 500);

export default initMenu;