const firstTicket = document.querySelector("#frist");
const secondTicket = document.querySelector("#second");
const thirdTicket = document.querySelector("#third");
const TotalPrice = document.querySelector('#total');

let total = 0;

firstTicket.addEventListener("click", function () {
    console.log("here")
    total += (firstTicket.value * 30)
    TotalPrice.innerHTML = total;
});
secondTicket.addEventListener("click", function () {
    total += (firstTicket.value * 15)
    TotalPrice.innerHTML = total;
});
thirdTicket.addEventListener("click", function () {
    total += (firstTicket.value * 300)
    TotalPrice.innerHTML = total;
});
