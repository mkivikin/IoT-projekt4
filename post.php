<?php
class Post {
    private $id;
    private $author;
    private $timestamp;
    private $type;
    private $content;
    private $data;
    public function newPost($id, $author, $timestamp, $type, $content, $startTime, $endTime){
        this.$id = $id;
        this.$author = $author;
        this.$timestamp = $timestamp;
        this.$type = $type;
        this.$content = $content;
        this.$startTime = $startTime;
        this.$endTime = $endTime;
    }

}
?>