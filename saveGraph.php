<?php
$postData = file_get_contents("php://input");
file_put_contents("posts/". time() . ".jpg", base64_decode($postData));
?>