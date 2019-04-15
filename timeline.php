<?php
require('post.php');

function loadPosts(){
    //load from database
    $postArray = array();
    Array_push($postArray, new Post(1, 'Goldenschmidt', time(), 'line', 'interesting data', '2019-04-01 09:54:45', '2019-04-08 08:02:30'));
    Array_push($postArray, new Post(2, 'Goldenschmidt', time(), 'line', 'interesting data', '2019-04-09 09:54:45', '2019-04-10 08:02:30'));
    return $postArray;
}
function displayPosts($data){
    var_dump($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<?php displayPosts(loadPosts()); ?>
</div>
</body>
</html>