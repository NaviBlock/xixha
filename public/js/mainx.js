const btnSwitch = document.querySelector('#switch');
btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});

function cookieX(){
    var cookieY = document.getElementById('#switch').value;
    sessionStorage.setItem(cookieY).value;
    //console.log(cookieY);
    cookieX();
}

//cookieX();


/*function setCookie(cname, cvalue, exdays) {
    var n = new Data();
    document.setTime(n.getTime() + (exdays * 24 * 60 * 60 * 365));

    var expires = n.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

    btnCookie = true;
};

setCookie();*/

/*
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

*/
//document.cookie = "name=cookieX"; document.body.classList.toggle('click');
///var btnCookie = document.cookie;
/*
if (btnCookie == true){    
        document.body.classList.toggle('dark');
        btnSwitch.classList.toggle('active');
}else{
    //(btnCookie == false){
    document.body.classList.toggle('');
    btnSwitch.classList.toggle('');
};*/

/*if (document.cookie == true) {
    console.log("Test X");
} else {
    //document.cookie = classList.toggle('dark');  
    btnSwitch.classList.toggle('active');
};
*/

//btnCookie = btnSwitch;
/*function btnCookie(){
    cookie  domain = 127.0.0.1; path = '/'; max-age = 60*60*12*365;     
};
//const btnCookie = document.querySelector('#switch');*/
/*let promesa = cookieX.them(okCookie,fallCookie);
function okCookie(resultX){
    console.log(document.cookie=btnSwitch, resultX);
}
function fallCookie(error){
    console.log("Error"+error);
}*/