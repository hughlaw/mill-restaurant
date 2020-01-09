import Siema from 'siema';

const slideshow = new Siema({
  duration: 300,
  easing: 'ease-in-out',
  loop: true
});
document.querySelector('.gallery__button-prev').addEventListener('click', () => slideshow.prev());
document.querySelector('.gallery__button-next').addEventListener('click', () => slideshow.next());