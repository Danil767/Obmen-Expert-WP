
// coinSend = getStore("coinSend");
// coinReceive = getStore("coinReceive");
// sendUsd = getStore("sendUsd");
// receiveUsd = getStore("receiveUsd");
// inputAmount = getStore("inputAmount");
// receiveInput = getStore("receiveInput");
// setItems();
//
// function setItems() {
//     document.getElementById("inputAmount").value = inputAmount;
//     document.getElementById("receiveInput").value = receiveInput;
//     document.getElementById("dropdownMenuButtonSend").innerHTML = coinSend;
//     document.getElementById("dropdownMenuButtonReceive").innerHTML = coinReceive;
// }


function getStore(key) {
    return localStorage.getItem(key);
}


function nextStep() {
    if (inputAmount * sendUsd < minAmount) {
        document.getElementById("error").style.display = "block";
        document.getElementById("error").innerHTML = "Min amount for exchange is " + minAmount + "$";
    }
    else if (inputAmount * sendUsd > maxAmount) {
        document.getElementById("error").style.display = "block";
        document.getElementById("error").innerHTML = "Max amount for exchange is " + maxAmount + "$";
    }
    else{
    console.log("next step");
    var check = !document.getElementById("walletAddress").value.replaceAll(' ', '')
        || !document.getElementById("email").value.replaceAll(' ', '')
    if (check) {
        !document.getElementById("walletAddress").value.replaceAll(' ', '') ? displayError("errorWallet") : displayError("errorEmail");
        !document.getElementById("email").value.replaceAll(' ', '') ? displayError("errorEmail") : displayError("errorWallet");
    }
    else {
        if (!validateEmail()) {
            displayError("errorEmail");
        }
        else {
            if (!validateWallet()) {
                displayError("errorWallet");
            }
            else {
                saveUserData();
                createCookie("sendUsd",inputAmount * sendUsd,1);
                createCookie("pair",localStorage.getItem("sendCoinName") + "-" + localStorage.getItem("receiveCoinName"));
                createCookie("mail",localStorage.getItem("email"));
                createCookie("wallet",localStorage.getItem("wallet"));
                createCookie("receiveAmount",document.getElementById("receiveInput").value);
                createCookie("inputAmount",document.getElementById("inputAmount").value);
                createCookie("sendCoinName",localStorage.getItem("sendCoinName"));
                createCookie("receiveCoinName",localStorage.getItem("receiveCoinName"));
                createCookie("transactionId",localStorage.getItem("transactionId"));
                createCookie("usedPromo",localStorage.getItem("usedPromo"));
                window.location.href = '../logic/newOrder';
            }
        }
    }}
}


function displayError(error){
    document.getElementById(error).style.display = "block"
}
function typing(inputType) {
    document.getElementById(inputType).style.display = "none";
}


function validateEmail(email = "") {
    email = document.getElementById("email").value.replaceAll(' ', '');
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validateWallet(wallet = ""){
wallet = document.getElementById("walletAddress").value.replaceAll(' ', '');

var re = getRegex();
if(re==null){
    return true;
}
else{
return re.test(wallet);
}

}

function getRegex(){
    var coin = coinReceive.toUpperCase();
    switch(coin){
        case "ETH":
            return null;
        case "BTC":
            return null;
        case "XMR":
            return null;
        case "LTC":
            return null;
        case "CARD(RUB)":
            return null;
        case "CARD(USD)":
            return null;
        case "USDT(TRC20)":
            return null;
        default:
          return null;

    }
}


function saveUserData(){
    var d = new Date(); d.setMinutes(d.getMinutes() + 30);
    var transactionId = generateTransactionId(10)
    localStorage.setItem("email",document.getElementById("email").value.replaceAll(' ', ''));
    localStorage.setItem("wallet",document.getElementById("walletAddress").value.replaceAll(' ', ''));
    localStorage.setItem("creationTime",d);
    localStorage.setItem("transactionId",transactionId);
}

function generateTransactionId(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() *
 charactersLength));
   }
   return result;
}
// Function to create the cookie
function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }

    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}
