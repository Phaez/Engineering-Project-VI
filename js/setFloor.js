var floorThree = document.getElementById('fThree');
var floorTwo = document.getElementById('fTwo');
var floorOne = document.getElementById('fOne');






function sendFloor(floornumber) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        }
    };
    xmlhttp.open("GET", "elevator.php?reqfloor=" + floornumber, true);
    xmlhttp.send();
}



floorThree.addEventListener('click', function() {sendFloor(3)}, false);
floorTwo.addEventListener('click', function() {sendFloor(2)}, false);
floorOne.addEventListener('click', function() {sendFloor(1)}, false);