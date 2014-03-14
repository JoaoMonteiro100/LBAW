<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Want to know something? Just AskIt!">
    <meta name="author" content="Grupo 54">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>AskIt</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
	<!--<link href="css/cover.css" rel="stylesheet">-->
    <link href="css/offcanvas.css" rel="stylesheet">
	<link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/lavish-bootstrap.css" rel="stylesheet">
	<link href="less/variables.less" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include 'banner1.php'; ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-9 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Welcome!</h1>
			<p>Have a burning question? Just AskIt!</p>
			<form class="form-inline" role="form">
				<input class="form-control input-lg" type="text" placeholder="Question" required autofocus>
				<textarea type="text" class="form-control" rows="3" placeholder="Description (optional)"></textarea>
				<input type="text" class="form-control input-sm" placeholder="Tags" required>
				<!--<span class="help-block">The more tags you associate with your question, the faster you'll get an answer.</span>-->
				<p><button class="btn btn-lg btn-primary" type="submit">AskIt!</button></p>
			</form>
          </div>
          <div class="row">
		  <div class="col-sm-4">
          <div class="list-group">
		  <h4>Top questions</h4>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">BSOD when playing?</h4>
              <p class="list-group-item-text">When I try to open any game on my W8 laptop, I get the BSOD due to graphics driver failure. What could be causing it?</p>
			  <small>Tags: #Computers, #Windows, #Games</small>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">How to bake a cake?</h4>
              <p class="list-group-item-text">Guys!!! The instructions I've read are too complicated. Can someone please tell me how you bake a cake @ 420 degrees?</p>
			  <small>Tags: #Cooking, #HowTo</small>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Can I break into my own house?</h4>
              <p class="list-group-item-text">Scenario: I forgot my keys unside and door doesn't open from the outside. Can I legally take down my own door or am I going to jail??</p>
			  <small>Tags: #1stWorldProblems, #WhatIf</small>
            </a>
			<a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Do you know this music?</h4>
              <p class="list-group-item-text">It goes like this: "la la pa tchim daaa, la la laaa la BOOM, la la laaa la BOOM" etc.</p>
			  <small>Tags: #Music</small>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
          <div class="list-group">
		  <h4>Recent questions</h4>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">BSOD when playing?</h4>
              <p class="list-group-item-text">When I try to open any game on my W8 laptop, I get the BSOD due to graphics driver failure. What could be causing it?</p>
			  <small>Tags: #Computers, #Windows, #Games</small>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">How to bake a cake?</h4>
              <p class="list-group-item-text">Guys!!! The instructions I've read are too complicated. Can someone please tell me how you bake a cake @ 420 degrees?</p>
			  <small>Tags: #Cooking, #HowTo</small>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Can I break into my own house?</h4>
              <p class="list-group-item-text">Scenario: I forgot my keys unside and door doesn't open from the outside. Can I legally take down my own door or am I going to jail??</p>
			  <small>Tags: #1stWorldProblems, #WhatIf</small>
            </a>
			<a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Do you know this music?</h4>
              <p class="list-group-item-text">It goes like this: "la la pa tchim daaa, la la laaa la BOOM, la la laaa la BOOM" etc.</p>
			  <small>Tags: #Music</small>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
				<div class="col-sm-4">
          <div class="list-group">
		  <h4>Controversial questions</h4>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">BSOD when playing?</h4>
              <p class="list-group-item-text">When I try to open any game on my W8 laptop, I get the BSOD due to graphics driver failure. What could be causing it?</p>
			  <small>Tags: #Computers, #Windows, #Games</small>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">How to bake a cake?</h4>
              <p class="list-group-item-text">Guys!!! The instructions I've read are too complicated. Can someone please tell me how you bake a cake @ 420 degrees?</p>
			  <small>Tags: #Cooking, #HowTo</small>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Can I break into my own house?</h4>
              <p class="list-group-item-text">Scenario: I forgot my keys unside and door doesn't open from the outside. Can I legally take down my own door or am I going to jail??</p>
			  <small>Tags: #1stWorldProblems, #WhatIf</small>
            </a>
			<a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Do you know this music?</h4>
              <p class="list-group-item-text">It goes like this: "la la pa tchim daaa, la la laaa la BOOM, la la laaa la BOOM" etc.</p>
			  <small>Tags: #Music</small>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
		
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
		  <h4>Most commonly used tags:</h4>
          <div class="list-group">
            <a href="#" class="list-group-item">#Computers</a>
            <a href="#" class="list-group-item">#1stWorldProblems</a>
            <a href="#" class="list-group-item">#Windows</a>
            <a href="#" class="list-group-item">#Games</a>
            <a href="#" class="list-group-item">#Music</a>
            <a href="#" class="list-group-item">#WhatIf</a>
            <a href="#" class="list-group-item">#Programming</a>
            <a href="#" class="list-group-item">#Cooking</a>
            <a href="#" class="list-group-item">#HowTo</a>
            <a href="#" class="list-group-item">#WorldNews</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; AskIt 2014</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>
	<script src="js/docs.min.js"></script>
  </body>
</html>