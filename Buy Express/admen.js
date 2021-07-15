
window.onload=function(){

var createbutton=document.getElementById("createbutton")
createbutton.addEventListener("click",function(){
    location.href="createAccount.php";
});


var forgotbutton=document.getElementById("forgotAccount")
forgotbutton.addEventListener("click",function(){
    location.href="forgotAccount.php";
});
}