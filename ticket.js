const firstTicket = document.querySelector("#frist");
const secondTicket = document.querySelector("#second");
const thirdTicket = document.querySelector("#third");
const TotalPrice = document.querySelector("#total");

let total = 0;

firstTicket.addEventListener("click", function () {
  total=0;
  total = thirdTicket.value * 300 + secondTicket.value * 15 + firstTicket.value * 30;
  TotalPrice.innerHTML = total;
});
secondTicket.addEventListener("click", function () {
  total=0;
  total = thirdTicket.value * 300 + secondTicket.value * 15 + firstTicket.value * 30;
  TotalPrice.innerHTML = total;
});
thirdTicket.addEventListener("click", function () {
  total=0;
  total = thirdTicket.value * 300 + secondTicket.value * 15 + firstTicket.value * 30;
  TotalPrice.innerHTML = total;
});
