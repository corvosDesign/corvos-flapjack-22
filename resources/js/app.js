require('./bootstrap');
require('./test.js');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import anime from 'animejs/lib/anime.es.js';
window.anime = anime;

