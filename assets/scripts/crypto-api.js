
 chooseCoin(coinSend, 1,sendCoinName);
 chooseCoin(coinReceive, 2,receiveCoinName);

function reloadPage() {
    coinToUsd(coinSend, 1);
    coinToUsd(coinReceive, 2);
}

function load(timeout = 2000) {
    console.log("loading")
    var element = document.getElementById("loader");

    element.style.display = "flex";
    let timer;
    timer = setTimeout(() => { element.style.display = "none"; }, timeout);


}

// function writePair(coin, pairId, coinTo) {
//     if (document.getElementById(pairId) != null) {


//         var xhttp = new XMLHttpRequest();

//         xhttp.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 res = xhttp.responseText;
//                 res = JSON.parse(res)
//                 document.getElementById(pairId).innerHTML = res["data"]["market_data"][coinTo]
//             }
//         };
//         xhttp.open("GET", 'https://data.messari.io/api/v1/assets/' + coin + '/metrics', true,);
//         xhttp.setRequestHeader("x-messari-api-key", apiKey);
//         xhttp.send();
//     }
// }


function coinToUsd(coin, type) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            res = xhttp.responseText;
            res = JSON.parse(res)

            if (type == 1) {
                sendUsd = +res["data"]["market_data"]["price_usd"]
                // sendUsdText = sendUsd + '';
                // sendUsdText = sendUsdText.substr(0,sendUsdText.indexOf(".")+3)
                // sendUsd = +sendUsdText
            }
            else {
                receiveUsd = +res["data"]["market_data"]["price_usd"]
                // receiveUsdText = receiveUsd + '';
                // receiveUsdText = receiveUsdText.substr(0,receiveUsdText.indexOf(".")+3)
                // receiveUsd = +receiveUsdText

            }

            inputAmountSet();

        }
    };
    if(customCoins[coin]){
        if (type == 1) {
            sendUsd = customCoins[coin]
        }
        else {
            receiveUsd = customCoins[coin]

        }
        inputAmountSet();
    }
    else{
        xhttp.open("GET", 'https://data.messari.io/api/v1/assets/' + coin + '/metrics', true);
        xhttp.setRequestHeader("x-messari-api-key", apiKey);
        xhttp.send();
    }


}




// writePair("BTC", "pair-1", "price_eth");
// writePair("DOGE", "pair-2", "price_btc");
// writePair("ETH", "pair-3", "price_usd");
// writePair("BNB", "pair-4", "price_btc");



function chooseCoin(coin, type, coinName = "-") {
    tn = type==1?2:1;
    document.getElementById("searchValue"+ tn).value = "";
    type == 1 ? coinSend = coin : coinReceive = coin;
    inTextEN = type==1 ? "Changing " +coin:"To "+ coin;
    inTextRU = type==1 ? "Меняем " +coin:"На "+ coin;
    document.getElementById(type == 1 ? "sendCoinInfo" : "receiveCoinInfo").innerHTML = localStorage.getItem("language") == "ru" ? inTextRU : inTextEN;
    console.log("url(../fonts/"+coin+".svg)");
    type == 1 ? document.getElementById("mobileSend").style.backgroundImage = "url('../fonts/"+coin+".svg')" :document.getElementById("mobileReceive").style.backgroundImage = "url('../fonts/"+coin+".svg')";
    type == 1 ? document.getElementById("sendCoins").classList.add("mobileHide") : document.getElementById("receiveCoins").classList.add("mobileHide");
    const boxes = document.querySelectorAll(`.coin-${type == 1 ? 2 : 1}`);
    const boxes2 = document.querySelectorAll(`.coin-${type == 1 ? 1 : 2}`);

    boxes.forEach(box => {
        box.style.display = "flex";
    });
    boxes2.forEach(box => {
        box.style="border-color: transparent;";
    });


    var elem1 = document.getElementById(`${coinName}-1`);
    var elem2 = document.getElementById(`${coinName}-2`);
    if (type == 1) {
        if (coinName != "-") {
            sendCoinName = coinName
        }
        if(elem2){

          document.getElementById(`${coinName}-2`).style.display = "none";
        }
        if(elem1){

          document.getElementById(`${coinName}-1`).style="border-color: #fff;";
        }
    }
    else {
        if (coinName != "-") {
            receiveCoinName = coinName
        }
        if(elem2){

          document.getElementById(`${coinName}-2`).style="border-color: #fff;";
        }
        if(elem1){

          document.getElementById(`${coinName}-1`).style.display = "none";
        }
    }
    coinToUsd(coin, type);



}

rotated = false;
function rotate() {
    load()
    var element = document.getElementById("switchBtn")
    if (rotated) {
        element.className = 'switchBtn';
    } else {
        element.className = 'switchBtn rotate';
    }
    rotated = !rotated
    //rotate logic
    var tempCoin = coinReceive;
    chooseCoin(coinSend, 2);
    chooseCoin(tempCoin, 1);
    //
}



function debounce(func, timeout = 2000) {

    let timer;
    return (...args) => {
        clearTimeout(timer);
        timer = setTimeout(() => { func.apply(this, args); }, timeout);
    };

}
function inputAmountSet() {
    pairValue = 0;

    if (pairs[coinSend + coinReceive]) {
    pairValue = (sendUsd/receiveUsd) + (( (sendUsd/receiveUsd) * pairs[coinSend + coinReceive]) / 100);
    }
    else {
        if (addPercentage == 1) {
            pairValue = (sendUsd/receiveUsd) + (((sendUsd/receiveUsd) * percentage) / 100);
        }
        else {
            pairValue = (sendUsd/receiveUsd) - (( (sendUsd/receiveUsd) * percentage) / 100);
        }
    }
    console.log(pairValue);
    rateText = pairValue + '';
    rateText = rateText.substr(0,rateText.indexOf(".")+6)
    document.getElementById("rate_p").innerText = "1 " + coinSend + " ~ " + rateText + " " + coinReceive;
    document.getElementById("error").style.display = "none";
    load();
    inputAmount = document.getElementById("inputAmount").value;
    compare();
}
const processChange = debounce(() => inputAmountSet(), 1500);
const debounceRotate = debounce(() => rotate(), 500);


function compare() {

    if (pairs[coinSend + coinReceive]) {
        receiveAmount = ((inputAmount * sendUsd) / receiveUsd) + ((((inputAmount * sendUsd) / receiveUsd) * pairs[coinSend + coinReceive]) / 100);
    }
    else {
        if (addPercentage == 1) {
            receiveAmount = ((inputAmount * sendUsd) / receiveUsd) + ((((inputAmount * sendUsd) / receiveUsd) * percentage) / 100);
        }
        else {
            receiveAmount = ((inputAmount * sendUsd) / receiveUsd) - ((((inputAmount * sendUsd) / receiveUsd) * percentage) / 100);
        }
    }

    var receiveAmountText = receiveAmount + '';
    receiveAmountText = receiveAmountText.substr(0,receiveAmountText.indexOf(".")+6);
    receiveAmount = +receiveAmountText;
    receiveAmount = receiveAmount + (receiveAmount*bonus/100);

    document.getElementById("receiveInput").value = receiveAmount;

    storeItems();

}


function exchange() {
    if (inputAmount * sendUsd < minAmount) {
        document.getElementById("error").style.display = "block";
        document.getElementById("error").innerHTML = localStorage.getItem("language") == "ru" ? langArr["min"]["ru"] + minAmount + "$" : langArr["min"]["en"] + minAmount + "$";
    }
    else if (inputAmount * sendUsd > maxAmount) {
        document.getElementById("error").style.display = "block";
        document.getElementById("error").innerHTML = localStorage.getItem("language") == "ru" ? langArr["max"]["ru"] + maxAmount + "$" : langArr["max"]["en"] + maxAmount + "$";
    }
    else {

        storeItems();
        // window.location.href = 'processing.php';
        nextStep();
    }
}

function store(key, value) {
    localStorage.setItem(key, value);
}

function storeItems() {
    store("coinSend", coinSend);
    store("coinReceive", coinReceive);
    store("inputAmount", inputAmount);
    store("sendUsd", sendUsd);
    store("receiveUsd", receiveUsd);
    store("receiveCoinName", receiveCoinName);
    store("sendCoinName", sendCoinName);
    store("receiveInput", receiveAmount);
    store("usedPromo", usedPromo);

}
