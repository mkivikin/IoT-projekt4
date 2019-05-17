<?php
require('post.php');
if(isset($_GET['type'])) {
    if($_GET['type'] == 'valgus'){
        $type = 'valgus';
    }
    if($_GET['type'] == 'akvaarium') {
        $type = 'akvaarium';
    }
    $date = time();
    $date = strtotime('-7 days', $date);
    $posts = loadData($date, $type);
    $requestData = array();
    $count = 0;
    foreach ($posts as $post) {
        $post = $post->getJSONencode();
        array_push($requestData, $post); 
    }
    echo(json_encode($requestData));
}




//if parameter set then use that date as date in the function;
//echo json_encode($requestData);
/*function loadallPosts(){
    $datafilepath = 'http://mahkor.000webhostapp.com/akvaarium.txt';
    //from the future load from db
    $postArray = array (new Post(1, 'Goldenschmidt', time(), 'line', json_decode(file_get_contents($datafilepath)), '2019-04-01 09:54:45', '2019-04-08 08:02:30'));
    //Array_push($postArray, new Post(2, 'Peep', time(), 'bar', json_decode(file_get_contents($datafilepath)), '2019-04-09 09:54:45', '2019-04-10 08:02:30'));
    return $postArray;
}*/

function loadData($startDate, $type){
    if($type == 'akvaarium') {
        $datafilepath = 'http://mahkor.000webhostapp.com/akvaarium.txt';
    } else {
        $datafilepath = 'http://mahkor.000webhostapp.com/valgus.txt';
    } 
    
    //from the future load from db
    $preData = json_decode(file_get_contents($datafilepath));
    $data = array();
    $startDate;
    $count = 0;
    foreach($preData as $d){
        if((strtotime($d->time) >= $startDate)){
            if($count == 5) {
                array_push($data, $d);
                $count = 0;
            }
            $count++;
        }
    }
    $postArray = array (new Post(1, 'Goldenschmidt', time(), 'line', $data, '2019-04-01 09:54:45', '2019-04-08 08:02:30'));
    //Array_push($postArray, new Post(2, 'Peep', time(), 'bar', $data, '2019-04-09 09:54:45', '2019-04-10 08:02:30'));
    return $postArray;
}
?>