<?php /* foreach($posts as $post) {
    echo '<div class="card">';
      echo '<div class="card-header">';
        echo $post->getAuthor().' '.
        '<div class="float-sm-right">'. $post->getTimestamp()  .'</div>';
      echo '</div>';
      echo '<div class="card-body">';
        echo '<canvas id="myChart"></canvas>';
       //echo $post->getContent();
       echo '</div>';
      echo '<div class="card-footer">';
        echo $post->getStartTime() .
        '<div class="float-sm-right">'. $post->getEndTime(). '</div>';
      echo '</div>';
    echo '</div>';
  }*/ 
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
<canvas id="myChart"></canvas>
</div>
</body>
</html>
<script>fetchData(action, value);</script>