import debug from 'debug';
const d = debug('nav');
const $ = sel => document.querySelector(sel);

export default function setupNav() {

  // log
  d('setting up');

  // dom node references
  const menu = $('nav .menu-items');
  const toggle = $('.hamburger.toggle');
  //const subMenu = $('.sub-menu');
  //const subToggle = $('nav .menu-item-has-children i');

  // helper functions
  const toggleMenu = () => menu.classList.toggle('active');
  const openHamburger = () => toggle.classList.toggle('open');
  //const toggleSubMenu = () => this.subMenu.classList.toggle('active');

  // add click listener to toggle
  toggle.addEventListener('click', () => {
    d('toggle clicked');
    toggleMenu();
    openHamburger();
  });


}
