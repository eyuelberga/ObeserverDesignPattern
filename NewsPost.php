<?php 
class NewsPost{
    protected $title;
    protected $content;
    public function __construct(string $title, string $content){
        $this->title = $title;
        $this->content = $content;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getContent(){
        return $this->content;
    }
}
?>