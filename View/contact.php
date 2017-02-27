<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
  <?php include $_SERVER["DOCUMENT_ROOT"]. '/wineproject/view/inc/mainheader.php'; ?>
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>Your Full Name</label></span>
						    	<span><input name="user" type="text" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>E-mail Address</label></span>
						    	<span><input name="email" type="email" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="usermessage"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Where We Are</h3>
					    	  <div class="map">
							   	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19905.711081234014!2d-0.3007083961169429!3d51.417497545698645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876093778987453%3A0x4c3f21b23e3e35ec!2sKingston+upon+Thames!5e0!3m2!1sen!2suk!4v1487814572112" width="400" height="200" frameborder="0" style="border:0"></iframe>
							  </div>
      				</div>
      			<div class="company_address">
						    	<p>*Address 1*</p>
						   		<p>*Address 2*</p>
						   		<p>*Country*</p>
				   		<p>Phone:</p>
				 	 	<p>Email:</p>
				</div>
				</div>
			  </div>
         </div>
    </div>

  <?php include $_SERVER["DOCUMENT_ROOT"]. '/wineproject/view/inc/footer.php'; ?>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

