function getData() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById('mychart').innerHTML = "";
            var resp = JSON.parse(xhttp.responseText);
            var jsonfile = resp;
            var dataset = jsonfile; 
        
            var config = {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [
                            dataset.one,
                            dataset.two,
                            dataset.three
                        ],
                        backgroundColor: [
                            window.chartColors.red,
                            window.chartColors.orange,
                            window.chartColors.yellow,
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        'Floor 1',
                        'Floor 2',
                        'Floor 3',
                    ]
                },
                options: {
                    responsive: true
                }
            };
        
            var ctx = document.getElementById('mychart').getContext('2d');
            window.myPie = new Chart(ctx, config);

        }  
    };
    xhttp.open("GET", "getFloorData.php", true);
    xhttp.send();
}
var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
};
function loadGraph(){
    var jsonfile = getData();
    var dataset = jsonfile; 


	var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    dataset.one
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Red',
                'Orange',
                'Yellow'
            ]
        },
        options: {
            responsive: true
        }
    };

    var ctx = document.getElementById('mychart').getContext('2d');
    window.myPie = new Chart(ctx, config);
};

function showGraphInterval(millisecond){
    setInterval(loadGraph, millisecond);
};

window.addEventListener('load', function() {getData()}, false);
window.addEventListener('click', function() {getData()}, false);