import Alpine from 'alpinejs';
import Collapse from '@alpinejs/collapse';
import Intersect from '@alpinejs/intersect';

Alpine.plugin(Collapse);
Alpine.plugin(Intersect);
window.Alpine = Alpine;
Alpine.start();
