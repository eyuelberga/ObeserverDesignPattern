<?php

class NewsPublisher implements \SplSubject{
    protected $observers = array();
    protected $news = null;
    
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
    public function attach(\SplObserver $observer){
        $this->observers[] = $observer;
    }
    public function detach(\SplObserver $observer){
        $key = array_search($observer, $this->observers,true);
        if($key){
            unset($this->observers[$key]);
        }
    }
    public function postNews(NewsPost $newsPost){
        $this->news = $newsPost;
        $this->notify();
    }
    public function onNewsPosted(){
        return $this->news->getTitle()."</span><p class='white-text'>".$this->news->getContent()."</p></div></div></div>";
    }

    }
?>