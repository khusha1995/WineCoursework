<!doctype html>

<head>
<title>10 Green Bottles > Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/wineproject/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/wineproject/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="/wineproject/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/wineproject/js/move-top.js"></script>
<script type="text/javascript" src="/wineproject/js/easing.js"></script>
<script type="text/javascript" src="/wineproject/js/startstop-slider.js"></script>
</head>

<body>
      <div class="wrap">
	<div class="header">
		<div class="headertop_desc">		<!-- line splitting Reg. and Login from body -->
			<div class="account_desc">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<img src="/wineproject/images/index_images/homeicon.png"/>
			</div>
			  <div class="cart">
			  	   <p><span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - £0.00
			  	   	<ul class="dropdown">
							<li>Nothing here ...yet :)</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="homepage.php">Home</a></li>
			    	<li><a href="about.php">About</a></li>
			    	<li><a href="contact.php">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>
</body>


