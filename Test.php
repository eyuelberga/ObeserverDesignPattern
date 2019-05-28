<?php
include("NewsPost.php");
include("NewsSubscriber.php");
include("NewsPublisher.php");
$abebe = new NewsSubscriber('abebe');
$newsPub = new NewsPublisher();

$newsPub->attach($abebe);
$news = new NewsPost("Test News","First news to all subscribers");
$newsPub->postNews($news);

?>