<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','sterlingffd9@yahoo.com');
	define('MESSAGE_SUBJECT','** Email from my Website **');
	define('REPLY_TO', 'sterlingffd9@yahoo.com');
	define('FROM_ADDRESS', 'sterlingffd9@yahoo.com');
	define('REDIRECT_URL', 'http://www.sterlingffdesigns.com/');
	
	require_once('validation.php');

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Custom Stains</title>
    
    
   

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
  <body>
 
  
  <div id="wrapper">
        <img src="hero.png"  atl="tumbl"class="img-responsive" >
   <div class="navbar navbar-inverse " role="navigation">
      <div class="container">
        <div class="navbar-header">
        
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
             <li><a href="sponsore.html">Sponsor</a></li>
            <li class="active"><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>  
      </div>
    </div>
    
    
    <div class="container-fluid">
    
    <div class=" col-lg-12">
     <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<p>
					<label for="name">Name:</label><?php echo @$name_error; ?>
					<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" required />
				</p>
				<p>
					<label for="email">Email:</label><?php echo @$email_error; ?>
					<input type="email" id="email" name="email" value="<?php echo @$email ?>" class="email required" required />
				</p>
				<p>
					<label for="message">Message:</label>
				</p>
				<p><?php echo @$message_error; ?>
				  <textarea cols="45" rows="7" id="message" name="message" class="required"><?php echo @$message ?></textarea>
			  </p>
				<input name="submitted" type="submit" value="Send" />
			</fieldset>
		</form>
        </div>
  
    
    
     <footer>
     
 <img src="logo.png"  class="img-responsive" >
      </footer>
    
  
    
    
    
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </div>
</html>