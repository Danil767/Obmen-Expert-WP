const allLang = ['en', 'ru'];
const select = document.querySelector('select');
if(select){
select.addEventListener('change', changeURLLanguage);}

// перенаправить на url с указанием языка
function changeURLLanguage() {
    let selectedLanguage = select.value;
    localStorage.setItem("language",selectedLanguage);
    location.reload();
}

function changeLanguage() {
    let lng = localStorage.getItem("language");
    if (!allLang.includes(lng)) {
        localStorage.setItem("language","en");
        location.reload();
    }
    if(select){
    select.value = localStorage.getItem("language");}
    // document.querySelector('.lng-chip').innerHTML = langArr['chip'][hash];
    for (let key in langArr) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            if(key.includes("placeholder")){
                elem.placeholder = langArr[key][localStorage.getItem("language")];
            }
            else{
            elem.innerHTML = langArr[key][localStorage.getItem("language")];
        }
        }

    }
}

changeLanguage();
