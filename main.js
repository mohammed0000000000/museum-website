// Show Menu Bar
const mune = document.querySelector('.menu');
console.log(mune)
const ul = document.querySelector('nav ul');
mune.addEventListener("click", function () {
    ul.classList.toggle('small');
});
