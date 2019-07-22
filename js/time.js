
$(document).ready(function(){
    var refreshTime = setInterval(() =>
    {
    var today = new Date();
    var time;
    time = ('0' + today.getHours()).slice(-2) + ":" 
    + ('0' + today.getMinutes()).slice(-2)  +   ":" 
    + ('0' + today.getSeconds()).slice(-2)  +   " "
    + ('0' + today.getFullYear()).slice(-2) +   "-" 
    + ('0' + today.getMonth()).slice(-2)    +   "-" 
    + ('0' + today.getMinutes()).slice(-2);
    var text = document.getElementById("currenttime");
    text.innerHTML = time;
    var properID = CheckReload();
    if (properID > 0) {
      clearInterval(refreshTime);
    }
    }, 1)
});

$(document).onunload(function(){
    clearInterval(refreshTime);
});
