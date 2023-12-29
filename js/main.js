// // Show Menu Bar
// var menu = document.querySelector('.menu');
// console.log(menu)
// const ul = document.querySelector('nav ul');
// menu.addEventListener("click", function () {
//     ul.classList.toggle('small');
// });
const pShowOnItem= document.querySelectorAll('.gallary p');
pShowOnItem.forEach(element => {
    element.onmouseover = function () {
        element.classList.toggle('show');
    }
    element.onmouseleave = function(){
        element.classList.toggle('show');
    }
});
// Handal nav bar
const menu = document.querySelector('nav .fa-solid');
const ul = document.querySelector('nav ul');
const lis = document.querySelectorAll('nav ul li a');
console.log(menu)
menu.addEventListener("click", function () {
    ul.classList.toggle("small")
})
lis.forEach(n => n.addEventListener("click", function () {
    menu.classList.remove('small');
    ul.classList.remove ('small');
}));

// handal welcome pragraph
const intro = document.querySelector(".intro");
console.log(intro);
window.onload = function () {
    intro.style.opacity = "1";
    intro.style.transition = "1s";
}

