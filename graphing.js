let action = "default";
let value = "";

function fetchData(action, value) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var data = JSON.parse(this.responseText);
          //console.log(data);
          createGraphs(data);
      };
    }
    xmlhttp.open("POST", "requestdata.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    if(action === "default") {
      xmlhttp.send("action=" + action);
    }
  }

  function createGraphs(data){
    /*for(d in data){

        var name = data[d]["author"];
        var type = data[d]["type"];
        var timestamp = data[d]["timestamp"];
        var startTime = data[d]["startTime"];
        var endTime = data[d]["endTime"];
        var content = data[d]["content"];
        console.log(name);

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
        });
    }*/
    var size = Object.keys(data[0]["content"][0]).length;
    console.log(data[0]["content"][0].length);
    var labelslength = data[0]["content"][0].length - 1;
    var labels = [data[0]["content"][0]["time"], data[0]["content"][size]["time"]];
    console.log(data[0]["content"][0]["niiskus"]);
     var dataset = data[0]["content"].map(function(e) {
        return e.niiskus;
     });
    var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: labels,
            datasets: [{
                label: 'niiskus',
                //backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: dataset
            }]
        },

        // Configuration options go here
        options: {
        }
        });
  }