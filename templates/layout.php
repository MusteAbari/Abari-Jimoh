<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oxygen:400,300" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Condiment" rel="stylesheet">
		<!--<link rel="stylesheet" href="/style.css"/ media="screen and (min-width: 800px)">-->
		<!--<link rel="stylesheet" href="/mobile.css"/ media="screen and (max-width: 800px)">-->
		<!--<link rel="stylesheet" href="/stylesheets/style.css"/ media="screen and (min-width: 1000px)">-->
		<?php require 'stylesheet.php'; ?> 

    	<title><?php echo $title; ?></title>
	</head>
	<body>
	   <div class="headerinfo">
	   		<div class="socialmedialink">
	   			<a href="https://www.linkedin.com/in/Mustapha-abari-jimoh" class="fa fa-linkedin"></a>
	   			<a href="https://www.linkedin.com/in/Mustapha-abari-jimoh" class="fa fa-github"></a>
	   		</div>
	   		<div class="contactinfo">
	   			<i class="fa fa-envelope" style="font-size:16px"></i>M.abarijimoh@gmail.com
				<i class="fa fa-phone" style="font-size:16px"></i>07487864410<br>
	   		</div>
	   	</div>
	<div class="wrapper">	
	 
	 <section class="">
	 	<header class="title">
	 		<h1><a href="/home.php">MUSTAPHA ABARI-JIMOH</a></h1>
	 		<p>Problems are hidden opportunities</p>
	 	</header>
	 </section>
			<?php
    			require 'templates/nav.php';
     		?>
	 
	 
      <?php echo $content; ?>

	  <footer>
		   WEBSITE DESIGNED BY MUSTAPHA ABARI-JIMOH
	  </footer>
</div>
</body>
</html>
