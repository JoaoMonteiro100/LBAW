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
    <?php include 'banner.php'; ?>
	
	<div class="container">
		<h1>Have a burning question? Just AskIt!</h1>
		<br>
		 <div class="jumbotron">
			<form class="form-horizontal" role="form">
			  <div class="form-group">
				<label for="inputQuestion" class="col-sm-2 control-label">Question</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control input-lg" id="inputQuestion" placeholder="Summarized question" required autofocus>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputDescription" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
				  <textarea type="text" class="form-control" rows="5" id="inputDescription" placeholder="Give additional information and contextualize your question"></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputTags" class="col-sm-2 control-label">Tags</label>
				<div class="col-sm-10">
				  <input type="text" id="inputTags" class="form-control input-sm" placeholder="Mark your question with appropriate tags" required>
				</div>
			  </div>
			  <button class="btn btn-lg btn-primary" type="submit">AskIt!</button>
			</form>
        </div>
		
		
	
	
	
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