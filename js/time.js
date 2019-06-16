
$(document).ready(function(){


    setInterval(() =>
    {
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds() + " "+ today.getFullYear() + "-" + today.getMonth() + "-" + today.getMinutes();
    var text = document.getElementById("currenttime");
    text.innerHTML = time;
    }, 1)
});

