<?php
class Post {
    private $id;
    private $author;
    private $timestamp;
    private $type;
    private $content;
    private $data;
    private $startTime;
    private $endTime;
    public function __construct($id, $author, $timestamp, $type, $content, $startTime, $endTime){
        $this->id = $id;
        $this->author = $author;
        $this->timestamp = date('Y-m-d H:i:s', $timestamp);
        $this->type = $type;
        $this->content = $content;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }

    public function getID(){
        return $this->id;
    }

    public function getAuthor(){
        return $this->author;
    }
    public function getTimestamp(){
        return date('Y-m-d H:i:s', $this->timestamp);
    }
    public function getType(){
        return $this->type;
    }
    public function getContent(){
        return $this->content;
    }
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }

    public function getJSONencode() {
        return get_object_vars($this);
    }

}
?>