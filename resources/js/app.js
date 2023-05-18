require('./bootstrap');

import Alpine from 'alpinejs';
import 'flowbite';
import 'tw-elements';
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// ..
window.Alpine = Alpine;

Alpine.start();
AOS.init();
