<?php
require('class.post.php');
displayPosts(loadPosts());
function loadPosts(){
    //load from database
    $postArray = array();
    Array_push($postArray, newPost(1, 'Goldenschmidt', time(), 'line', 'interesting data', '2019-04-01 09:54:45', '2019-04-08 08:02:30'));
    Array_push($postArray, newPost(2, 'Goldenschmidt', time(), 'line', 'interesting data', '2019-04-09 09:54:45', '2019-04-10 08:02:30'));
    return $postArray;
}
function displayPosts($data){
    vardump($data);
}
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ajaveeb</title>
</head>

<body>
  
</body>
</html>