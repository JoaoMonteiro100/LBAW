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
	<link href="less/datepicker.less" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	
  </head>
  <body>	
    <?php include 'banner1.php'; ?>
  
	<div class="container">
	<div class="row well">
	<h1>Register</h1>
	<br>
	<form class="form-horizontal" role="form">
	  <div class="form-group">
		<label for="inputName3" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-5">
		  <input type="text" class="form-control-inline input-sm" id="inputFirstName3" placeholder="First name">
		  <input type="text" class="form-control-inline input-sm" id="inputLastName3" placeholder="Last name">
		</div>
	  </div>
	  <div class="form-group">
		<label for="disabledTextInput" class="col-sm-2 control-label">Date of Birth</label>
		<div class="col-sm-10">
			  <div class="input-append date" id="disabledTextInput" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
				<input class="span2" size="16" type="text" value="12-02-2012" readonly>
				<button type="button" class="add-on">Change</button>
          </div>
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputGender3" class="col-sm-2 control-label">Gender</label>
		<div class="col-sm-2">
            <select class="form-control-inline">
			  <option>Male</option>
			  <option>Female</option>
			</select>
		</div>
	  </div>
	   <div class="form-group">
		<label for="inputUsername3" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control-inline" id="inputUsername3" placeholder="Username">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control-inline" id="inputEmail3" placeholder="Email">
		</div>
	  </div>

	  <div class="form-group">
		<label for="inputCountry3" class="col-sm-2 control-label">Country</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control-inline" id="inputEmail3" placeholder="Country">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control-inline" id="inputPassword3" placeholder="Password">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputRePassword3" class="col-sm-2 control-label">Confirm password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control-inline" id="inputRePassword3" placeholder="Password">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10" align="right">
		  <button type="submit" class="btn-lg btn-primary">Register</button>
		  <button type="submit" class="btn-sm btn-primary">Cancel</button>
		</div>
	  </div>
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
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'dd-mm-yyyy'
			});
			$('#disabledTextInput').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
  </body>
</html>