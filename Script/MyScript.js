function bgDove() {
    document.getElementById("divO").style.backgroundColor="#333";
    document.getElementById("ospiti").style.display= "none";
    document.getElementById("regioni").style.display= "block";
    document.getElementById("checkin").style.backgroundColor = "#333";//div check-in
    document.getElementById("Checkout").style.backgroundColor = "#333";//div check-out
    document.getElementById("dovein").style.backgroundColor = "lightgray";//input dove
    document.getElementById("dove").style.backgroundColor = "lightgray"; //div ricerca
    document.getElementById("dovein").style.color="white";
    document.getElementById("dovein").style.textShadow= "0 0 4px #0af, 0 0 8px #0af, 0 0 12px #0af, 0 0 16px #0af";    
}
function bgCheckin() {    
    document.getElementById("divO").style.backgroundColor="#333";
    document.getElementById("ospiti").style.display= "none";
    document.getElementById("regioni").style.display= "none";
    document.getElementById("dove").style.backgroundColor = "#333";//div ricerca
    document.getElementById("Checkout").style.backgroundColor = "#333";//div check-out
    document.getElementById("dovein").style.backgroundColor = "#333";//input dove
    document.getElementById("checkin").style.backgroundColor = "lightgray";//div check-in
}
function bgCheckout() {
    document.getElementById("divO").style.backgroundColor="#333";
    document.getElementById("ospiti").style.display= "none";
    document.getElementById("regioni").style.display= "none";
    document.getElementById("dove").style.backgroundColor = "#333";//div ricerca
    document.getElementById("dovein").style.backgroundColor = "#333";//input dove
    document.getElementById("checkin").style.backgroundColor = "#333";//div check-in
    document.getElementById("Checkout").style.backgroundColor = "lightgray";//div check-out
}
function NascondiOspiti(){
    document.getElementById("regioni").style.display= "none";
    document.getElementById("dove").style.backgroundColor = "#333";//div ricerca
    document.getElementById("dovein").style.backgroundColor = "#333";//input dove
    document.getElementById("checkin").style.backgroundColor = "#333";
    document.getElementById("Checkout").style.backgroundColor = "#333";//div check-out
    document.getElementById("divO").style.backgroundColor="lightgray";
    document.getElementById("ospiti").style.display= "block";
    document.getElementById("valO").style.textShadow= "rgb(0, 170, 255) 0px 0px 4px, rgb(0, 170, 255) 0px 0px 8px, rgb(0, 170, 255) 0px 0px 12px, rgb(0, 170, 255) 0px 0px 16px";
}

function inserimento(x){
    document.getElementById("dovein").value=x;
}

function nOspiti(){
    
    var adulti = document.getElementById("adulti").value;
    var bambini = document.getElementById("bambini").value;
    var animali = document.getElementById("animali").value;
    console.log(adulti);
    if(bambini > 0 || animali > 0 && adulti > 1){
        document.getElementById("valO").innerHTML = "Adulti "+ adulti +" bambini "+ bambini+" Animali "+animali;
    }
}
function togliO(){
    var x= document.getElementById("adulti").value ;
    console.log(x);
    if (x > 1) {
        var y = x - 1 ;
        document.getElementById("adulti").value = y ;
    }
}
function aggiungiO() {
    var x= document.getElementById("adulti").value ;
    x=parseInt(x);
    if (x < 16) {
        var y = x + 1 ;
        document.getElementById("adulti").value = y ;
    }
}

