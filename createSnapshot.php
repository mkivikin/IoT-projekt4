<?php
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
<body class = "bg-light">
<nav class="navbar navbar-inverse bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-white" href="#">IoT Blog</a>
    </div>
    <form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
  <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
    </div>
  </div>
</form>
  </div>
</nav>
<div class="container">
  <!-- Content here -->
  <div class="card">
  <form id="submitgraph" action="/submit_graph.php">
  <div class="card-header">
    <div class="col text-center">
        Create a snapshot
    </div>
  </div>
  <ul class="list-group list-group-flush">
        <li class="list-group-item">
        <div class="form-group">
    <label for="selType">Select diagram type:</label>
    <select class="form-control" id="selType">
        <option>Tulp</option>
        <option>Joon</option>
        <option>Karp</option>
        <option>XY Diagramm</option>
    </select>
    </div>
    </li>
    <li class="list-group-item">
        <label for="start">Start date:</label>
        <input type="date" id="start" name="time-start">
        <div class="float-right"><label for="end">End date:</label>
        <input type="date" id="end" name="time-end"></div>
    </li>
    <li class="list-group-item">
    <label for="selDataType">Select data type:</label>
    <select class="form-control" id="selDataType">
        <option>Niiskus</option>
        <option>Valgus</option>
        <option>Veesügavus</option>
    </select>
    <li class="list-group-item">
    <div class="col text-center">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </div>
    </li>
    </div>
    </li>

</form>
</div>
</div>
</body>
</html>
<script>
</script>
