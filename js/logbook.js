

$(document).ready(function(){
  $("#log").load("http://localhost/softeng/Engineering-Project-VI/js/logbookwill.txt", function(responseTxt, statusTxt, xhr){
    /*
    if(statusTxt == "success")
      alert("External content loaded successfully!");
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText); 
    */
    },'html');
});

document.write('<h3>HelloJavascript<h3>');