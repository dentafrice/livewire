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
      <div class="user">
      	<div class="information">
      		<div class="name">Caleb Mingle</div>
      		<p class="title">Software Engineer at Uber</p>
      	</div>

      	<div class="clearfix" />
      </div>
      
      <div class="links">
      	<ul class="nav nav-pills">
        	<li><a href="http://dentafrice.com" target="_blank">Blog</a></li>
        	<li><a href="http://sore.caleb.io" target="_blank">Photo Blog</a></li>
        	<li><a href="http://linkedin.com/in/calebio" target="_blank">LinkedIn</a></li>
        	<li><a href="http://github.com/dentafrice" target="_blank">Github</a></li>
      	</ul>
      </div>

      <div class="blog well">
        <ul class="nav nav-list">
          <li class="nav-header">Latest Blog Articles</li>
          <?php include "_inc/latest.php" ?>
        </ul>
      </div>

      <div class="contact">
        <div class="pull-left">
          <a href="mailto:me@caleb.io">me@caleb.io</a>
        </div>

        <div class="pull-right">
          <a href="http://twitter.com/caleb_io">@caleb_io</a>
        </div>

        <div class="clearfix"></div>
      </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
    <?php include "_inc/tracking.php"; ?>
  </body>
</html>