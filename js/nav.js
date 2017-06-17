import debug from 'debug';
const d = debug('nav');
const $ = sel => document.querySelector(sel);

export default function setupNav() {

  // log
  d('setting up');

  // dom node references
  const menu = $('nav .links');
  const toggle = $('nav .toggle');

  // helper functions
  const toggleMenu = () => menu.classList.toggle('active');

  // add click listener to toggle
  toggle.addEventListener('click', () => {
    d('toggle clicked');
    toggleMenu();
  });

}
