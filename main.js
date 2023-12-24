// Show Menu Bar
const mune = document.querySelector('.fa-solid');
console.log(mune)
mune.addEventListener("click", function () {
    const ul = document.querySelector('nav ul');
    const lis = document.querySelectorAll('nav ul li')
    const lia = document.querySelectorAll('nav ul li a')
    ul.style.cssText = `display:flex; flex-direction : column;
    position:absolute;top:100%; left:0; width:100%`;
    for (item of lis) {
        item.style.cssText = `padding: 0 10px 15px !important;`
        console.log(item);
    }
    for (item of lia) {
        item.style.cssText = `padding: 0 10px 15px !important;`
    }

});