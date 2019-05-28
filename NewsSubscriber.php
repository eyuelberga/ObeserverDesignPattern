<?php 

class NewsSubscriber implements SplObserver{
    protected $username;
    public function __construct(string $username){
        $this->username = $username;
    }

    public function update(\SplSubject $subject){
        echo"<div class='row'><div class='col s12 m5'><div class='card-panel teal'><span class='white-text'><strong>".$this->username.", </strong>".$subject->onNewsPosted(); 

    }
}
?>