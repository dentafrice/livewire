<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Caleb Mingle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href="/css/livewire.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
      <?php include "_inc/header.php"; ?>
      
      <hr />
      
      <div class="article">
      	<?php
      	$article = (isset($_GET["article"])) ? $_GET["article"] : "404";
		$article = realpath("./articles/{$article}.md");
		
		if(file_exists($article)) {
			$text = file_get_contents($article);
			include "_inc/markdown.php";
			echo Markdown($text);
		} else {
			echo "Article does not exist and can't find 404 page.";
		}
		
      	?>
      </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
    <?php include "tracking.php"; ?>
  </body>
</html>