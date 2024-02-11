import './bootstrap';

import Alpine from 'alpinejs';

import NestedSort from 'nested-sort'

window.Alpine = Alpine;

Alpine.start();

function renderForm(){
    return "+ <input type='text' placeholder='text'/><input type='text' placeholder='link'/>"
}

var menuEl = document.getElementById('nested-sort-wrap')


var onDeleteItem = function (deleteId){
    console.log('onDeleteItem', deleteId)
    // menuItems = nestedSort.data.filter(({id}) => {
    //     return id !== deleteId
    // });
}

var nestedSort = new NestedSort({
    nestingLevels:1,
    data: JSON.parse(menuEl.getAttribute('data-menu')),
    actions: {
        onDrop(data, e) {
            const mappedItems = data.map(function (item){
                var itemDom = document.querySelector(`[data-id="${item.id}"]`)
                const text = itemDom.querySelector(`[data-name="text"]`)
                const link = itemDom.querySelector(`[data-name="link"]`)
                return {
                    ...item,
                    link: link.value,
                    value: text.value
                }
            })
            menuEl.setAttribute('data-menu', JSON.stringify(mappedItems));
            // console.log('menuEl', (menuEl.getAttribute('data-menu')))
        }
    },
    el: '#nested-sort-wrap',
    listClassNames: ['nested-sort'],
    renderListItem: (el, { id, link, text }) => {

        el.textContent = '';

        var inputLink = document.createElement("input");
        inputLink.type = "text";
        inputLink.placeholder = "link";
        inputLink.name = "link";
        inputLink.setAttribute('data-name', 'link');
        inputLink.value = link;
        el.appendChild(inputLink);

        var inputText = document.createElement("input");
        inputText.type = "text";
        inputText.placeholder = "text";
        inputText.setAttribute('data-name', 'text');
        inputText.value = text;
        el.appendChild(inputText);

        const newButton = document.createElement('button');
        newButton.textContent = '- X -';
        newButton.onclick = function (){
            onDeleteItem(id)
        };
        el.appendChild(newButton);

        return el
    }
})
