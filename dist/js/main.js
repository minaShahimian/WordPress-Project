'use strict'
document.addEventListener("DOMContentLoaded",()=>{
    const nav=document.querySelector('#main-nav');
    const links=nav.querySelectorAll('.menu-item-has-children > a');
    console.log(links);
    links.forEach(link =>{
        let id= link.parentNode.getAttribute('id') + '-toggle';
        const input=document.createElement('input');
        input.type='checkbox';
        input.id=id;
        const label=document.createElement('label');
        label.setAttribute('for',id);
        label.classList.add('menu-toggle');
        const em =document.createElement('em');
        em.classList.add('toggle-icon');
        label.appendChild(em);
        link.after(input);
        input.after(label);

    });
});