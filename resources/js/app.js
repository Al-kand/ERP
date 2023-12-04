import './bootstrap';

import Alpine from 'alpinejs'
import showModals from "./showModals";
 
window.Alpine = Alpine
Alpine.data('showModals', showModals);
 
Alpine.start()
