
function generateHash(plainText)
{
    var md = forge.md.sha256.create();
    md.start();
    md.update(plainText, "utf8");
    var hashText = md.digest().toHex();
    return  hashText;
}
function activatePromo(){
  var code = document.getElementById("promocode").value;
  var codeInput = document.getElementById("promocode");
  if(!promocodes[generateHash(code)]){
    codeInput.classList.add("wrongInput");
  }
  else{
    var promoBtn = document.getElementById("promoBtn");
    promoBtn.disabled = "true";
    promoBtn.style.cursor = "not-allowed";
    promoBtn.style.background = "#86e986";
    promoBtn.style.color = "black";
    promoBtn.innerHTML = "+" + promocodes[generateHash(code)] + "%";
    codeInput.style.background = "#9eef9e";
    codeInput.disabled = "true";
    bonus = promocodes[generateHash(code)];
    usedPromo = code;
    compare();
  }
}

function removeError(){
  var codeInput = document.getElementById("promocode");
  codeInput.classList.remove("wrongInput");
}
