function openMobileChoose(dialogNumber){
document.getElementById("coins").style.display = "block";
var element = dialogNumber == 1 ? document.getElementById("sendCoins") : document.getElementById("receiveCoins");
element.classList.remove("mobileHide");
element.style.display = "block";
element.scrollIntoView();
}



function searchCoin(listNumber){
const boxes = document.querySelectorAll(`.coin-${listNumber == 1 ? 1 : 2}`);
var searching = document.getElementById("searchValue"+listNumber).value.toUpperCase();
console.log(searching);

boxes.forEach(box => {
    box.style.display = "flex";
});


boxes.forEach(box => {
    if(!box.className.includes(searching) || box.className.includes(listNumber == 1 ? coinReceive : coinSend)){
      box.style.display = "none";
    };
});
}
