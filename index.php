<?php
include("NewsPost.php");
include("NewsSubscriber.php");
include("NewsPublisher.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Public/vendor/materialize/css/materialize.css">
    <script src="main.js"></script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Observer Design Pattern Demo</a>
    </div>
  </nav>
 
  <div class="row">
      <div class="col s12"><h6>For this demo, 2 Subscribers have  been initialized and attached to the NewsPublisher</h6>
      <h6>These 2 Subscribers observe and get called when a new NewsPost is published.</h6></div>
      <div class="col s6">
      <?php
$subscriber1 = new NewsSubscriber('subscriber1');
$subscriber2 = new NewsSubscriber('subscriber2');
$newsPub = new NewsPublisher();

$newsPub->attach($subscriber1);
$newsPub->attach($subscriber2);

if (isset($_POST['post']))
    {
      $title = $_POST['title'];
      $content = $_POST['content'];

      $news = new NewsPost($title,$content);
      $newsPub->postNews($news);

      
    }
?>
      </div>
      <div class="col s6">
          <h6>Post news</h6>
          <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Title" name="title" type="text" class="validate">
          
        </div>
      </div>
    
      <div class="row">
        <div class="input-field col s12">
          <textarea name="content" class="materialize-textarea"></textarea>
          <label for="textarea1">Content</label>
        </div>
      </div>
      <div class="row">
          <button class="btn waves-effect waves-light" name="post" type="submit" name="action">Submit
            </button>
      </div>
    </form>
</body>
</html>
