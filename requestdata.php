<?php
require('post.php');
$posts = loadPosts();
$requestData = array();
foreach ($posts as $post) {
    $post = $post->getJSONencode();
    array_push($requestData, $post); 
}
echo json_encode($requestData);
function loadPosts(){
    $datafilepath = 'http://mahkor.000webhostapp.com/akvaarium.txt';
    //from the future load from db
    $postArray = array (new Post(1, 'Goldenschmidt', time(), 'line', json_decode(file_get_contents($datafilepath)), '2019-04-01 09:54:45', '2019-04-08 08:02:30'));
    Array_push($postArray, new Post(2, 'Peep', time(), 'bar', json_decode(file_get_contents($datafilepath)), '2019-04-09 09:54:45', '2019-04-10 08:02:30'));
    return $postArray;
}
?>