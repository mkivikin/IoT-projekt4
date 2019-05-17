let action = "default";
var min = 0;
var max = 100;
var stepsize = 10;
function fetchData(action, value, graphtype) {
    console.log("requestdata.php?type=" + value);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          var data = JSON.parse(this.responseText);
          console.log(data);
          createGraph(data, value, graphtype);
      };
    }
    xmlhttp.open("POST", "requestdata.php?type=" + value, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    if(action === "default") {
      xmlhttp.send("action=" + action);
    }
  }

  function createGraph(data, type, graphtype){
    var labels = data[0]["content"].map(function(e) {
        return e.time;
     });
     var dataset = data[0]["content"].map(function(e) {
         if(e.niiskus) {
              type = 'niiskus';
              max = 100;
              stepsize = 10;
            return e.niiskus;
         } if(e.valgus){
              type = 'valgus';
              max = 1000;
              stepsize = 100;
             return e.valgus;
         }
        
     });
     
     let movingAvg = calcMovingAvg(dataset);
     if(graphtype === "bar") {
        var fill = true;
     } else {
        var fill = false;
     }
     let time = new Date().getTime();
     time = new Date(time);
     let title = type + "e " + graphtype + " graafik genereeritud: " + time;
    var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: graphtype,

        // The data for our dataset
        data: {
            labels: labels,
            datasets: [{
                label: 'Libisev keskmine',
                type: 'line',
                backgroundColor: 'rgb(0, 255, 119)',
                borderColor: 'rgb(0, 255, 119)',
                data: movingAvg,
                fill: false
            },
                {
                label: type,
                backgroundColor: 'rgb(66, 134, 244)',
                borderColor: 'rgb(66, 134, 244)',
                data: dataset,
                fill: fill
            }]
            
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: title
            },
            scales: {
                yAxes: [{
                    ticks: {
                        max: max,
                        min: min,
                        stepSize: stepsize
                    }
                }]
            }
        }
        });
        document.getElementById("cgra").addEventListener("click", function _listener() {
            document.getElementById("cgra").removeEventListener("click", _listener);
            document.getElementById("csnap").removeEventListener("click", _listener);
            chart.destroy();
            console.log('chart destroyed');
        });
        document.getElementById("csnap").addEventListener("click", function _listener() {
            if(chart){
                createSnap(chart);
            }
            
        });
  }

  function calcMovingAvg(dataset){
      let len = dataset.length -1;
      let movingavg = new Array();
      let sum = 0;
    for(var i = 0; i< len; i++ ){
       sum = sum + parseInt(dataset[i]);
       let avg = sum/(i+1);
       movingavg.push(avg);
    }
    return movingavg;
  }

  function createSnap(chart){
      //console.log("test");
      if(chart){
        var dataURL = chart.toBase64Image();
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "saveGraph.php");
        xhr.setRequestHeader("Cache-Control", "no-cache");
        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        xhr.send(dataURL.match(/,(.*)$/)[1]);
      }
  }
