<!-- Fixed navbar
   <!-- Fixed navbar
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
     <div class="row-horizontal">
        <div class="col-xs-12 col-md-8">
           <img src="logo.png" alt="AskIt"> 
        </div>
   <form class="form-inline" role="form">
           <div class="form-group">
              <label class="sr-only" for="">Username</label>
              <input type="username" class="form-control" id="" placeholder="Enter username">
           </div>
           <div class="form-group">
              <label class="sr-only" for="">Password</label>
              <input type="password" class="form-control" id="" placeholder="Password">
           </div>
        </form>
   <button type="submit" class="btn btn-default">Sign in</button>
   </div>
     </div>
   </div>
   </div>
   -->
<style>
div.clr {color:rgb(226, 220, 216);}
</style>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">
            AskIt<!--img src="logo.png" alt="AskIt"-->
         </a>
      </div>
      <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
			<li><a href="#">AskIt</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="mailto:lbaw1354@fe.up.pt">Contact</a></li>

         </ul>
		 <!-- GUEST 
         <ul class="nav navbar-nav navbar-right ">
            <form class="form-inline" role="form">
               <li>
                  <div class="form-group">
                     <label class="sr-only" for="">Username</label>
                     <input type="username" class="form-control" id="" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                     <label class="sr-only" for="">Password</label>
                     <input type="password" class="form-control" id="" placeholder="Password" >
                  </div>
                  <button type="submit" class="btn btn-default">Sign in</button>
               </li>
               <li class="active" ><a href="./"><div class="clr">Make your own account now!</div></a></li>
            </form>
         </ul> --> 
		 		 <!-- USER  
         <ul class="nav navbar-nav navbar-right ">
              <li><img src="avatar.png" alt="Image" height="42" width="42"></li>
			  <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Ask a question</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Sign Out</a></li>
               </ul>
            </li>
         </ul>--> 
      		 		 <!-- Admin  -->
         <ul class="nav navbar-nav navbar-right ">
              
			  <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Ask a question</a></li>
				  <li><a href="#">Manage Users</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Sign Out</a></li>
               </ul>
            </li>
			<li><img src="avatar.png" alt="Image" height="42" width="42"></li>
         </ul> 
	  
	  
	  </div>
      <!--/.nav-collapse -->
   </div>
</div>
