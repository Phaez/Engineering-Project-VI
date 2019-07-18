
$(document).ready(function(){
    var refreshTime = setInterval(() =>
    {
    var today = new Date();
    var time;
    time = ('0' + today.getHours()).slice(-2) + ":" 
    + ('0' + today.getMinutes()).slice(-2)  +   ":" 
    + ('0' + today.getSeconds()).slice(-2)  +   " "
    + ('0' + today.getUTCDay()).slice(-2) +   "-" 
    + ('0' + today.getMonth()).slice(-2)    +   "-" 
    +  today.getFullYear();
    var text = document.getElementById("currenttime");
    text.innerHTML = time;

    }, 1000)
});

$(document).onunload(function(){
    clearInterval(refreshTime);
});
