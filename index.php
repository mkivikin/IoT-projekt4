<?php
//require('requestdata.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajaveeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="/graphing.js"></script>
  <link rel="stylesheet" href="cardstyle.css">
</head>
<body onload="fetchData(action, 'akvaarium', 'line');" class = "bg-light">
<nav class="navbar navbar-inverse bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-white" href="#">IoT Blog</a>
    </div>
    <form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
  <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="button" onclick="fetchData(action, 'valgus')">Search</button>
    </div>
  </div>
</form>
  </div>
</nav>
<div class="container">
<div class="form-group">
  <label for="sel1">Select graphtype:</label>
  <select class="form-control" id="sel1">
    <option value="line">line</option>
    <option value="bar">bar</option>
  </select>
  </div>
  <div class="form-group">
  <label for="sel2">Select datatype</label>
  <select class="form-control" id="sel2">
    <option value="valgus">valgus</option>
    <option value="akvaarium">niiskus</option>
  </select>
  </div>
<button class="btn btn-success" id="cgra"type="button" onclick="fetchData(action, document.getElementById('sel2').value, document.getElementById('sel1').value )">Generate graph</button>
<button id="csnap" class="btn btn-success" type="button" onclick="createSnap();">Create snapshot</button>
<canvas id="myChart"></canvas>
<img id="testimg" style="margin: 0 auto;" />
</div>
</body>
</html>