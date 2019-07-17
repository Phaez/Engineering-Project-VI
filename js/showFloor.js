
var floornum = document.getElementById('floornum');



function showFloor() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {

            var resp = xhttp.responseText;
            document.getElementById('floornum').innerHTML = xhttp.responseText;

        }  
    };
    xhttp.open("GET", "showFloor.php", true);
    xhttp.send();
}

function showFloorInterval(millisec) {
    setInterval(showFloor, millisec);
}


window.addEventListener('load', function() {showFloorInterval(500)}, false);

floornum.addEventListener('click', function() {showFloor()}, false);
