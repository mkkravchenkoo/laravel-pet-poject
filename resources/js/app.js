import './bootstrap';

import Alpine from 'alpinejs';

import NestedSort from 'nested-sort'

window.Alpine = Alpine;

Alpine.start();

var menuInput = document.getElementById('main-menu-field');
var csrf = document.querySelector('meta[name="csrf-token"]').content

window.onMenuItemChange = function (){
    var allItems = JSON.parse(menuInput.value)

    var optionId = this.getAttribute('data-menu-option-id');
    var newValues = allItems.map((item) => {
        const {text, link, id} = item;
        if(id === optionId){
            const newItem = {...item}
            if(this.name === 'link'){
                newItem.link = this.value;
                newItem.text = text;
            }else if(this.name === 'text'){
                newItem.text = this.value;
                newItem.link = link;
            }
            return newItem
        }else {
            return item
        }
    })

    menuInput.value = JSON.stringify(newValues)

}

var nestedMenuWrap = document.getElementById('nested-sort-wrap')
if(nestedMenuWrap){
    new NestedSort({
        nestingLevels:1,
        data: JSON.parse(menuInput.value),
        actions: {
            onDrop(data, e) {
                const mappedItems = data.map(function (item){
                    var itemDom = document.querySelector(`[data-id="${item.id}"]`)
                    const text = itemDom.querySelector(`[data-name="text"]`)
                    const link = itemDom.querySelector(`[data-name="link"]`)
                    return {
                        ...item,
                        link: link.value,
                        text: text.value
                    }
                })
                menuInput.value = JSON.stringify(mappedItems)
            }
        },
        el: '#nested-sort-wrap',
        listClassNames: ['nested-sort'],
        renderListItem: (el, item) => {
            const { id, link, text } = item
            el.textContent = '';
            el.innerHTML=`<div class="flex">
                        <div class="mr-1">
                            <input
                                type="text"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                name="link"
                                onchange="onMenuItemChange.call(this)"
                                placeholder="link"
                                data-name="link"
                                value="${link}"
                                data-menu-option-id="${id}"
                            >
                        </div>
                        <div class="mr-1">
                            <input
                                type="text"
                                name="text"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                onchange="onMenuItemChange.call(this)"
                                placeholder="text"
                                data-name="text"
                                value="${text}"
                                data-menu-option-id="${id}"
                            >
                        </div>
                        <div class="mr-1">
                            <form method="post" action="${window.location.origin}/admin/menu/${id}">
                                <input type="hidden" name="_token" value="${csrf}" autocomplete="off">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">X</button>
                            </form>
                        </div>
                    </div>`;
            return el
        }
    })

}
