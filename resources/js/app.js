import './bootstrap';

import Alpine from 'alpinejs';

import Sortable from 'sortablejs';

window.Alpine = Alpine;

Alpine.start();

var el = document.getElementById('items');
var sortable = Sortable.create(el);

