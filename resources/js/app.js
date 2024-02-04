import './bootstrap';

import Alpine from 'alpinejs';

import Sortable from 'sortablejs';

window.Alpine = Alpine;

Alpine.start();

var nestedSortables = [].slice.call(document.querySelectorAll('.main-menu-items'));
for (var i = 0; i < nestedSortables.length; i++) {
    new Sortable(nestedSortables[i], {
        group: 'nested',
        animation: 150,
        fallbackOnBody: true,
        // swapThreshold: 0.65,
    });
}

