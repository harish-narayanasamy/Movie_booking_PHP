<html>
<head>
	<title>Header</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>



	<div class="mobile-display" >
		<h2 class="site-title">
			<a href="href="index.php">
				<img src="logo.jpg" alt="" >
			</a>
		</h2>
	</div>
	<header>
		<nav>
			<a href="#" class="toggle-menu">&#9776;</a>
			<ul class="nav-list nav-open" id="nav">
                                 <li><a href="index.php">Home</a></li>
				<li><a href="nowshowing.php">Now Showing </a></li>
				<li><a href="timings.php">Session Times</a></li>


				<li class="has-logo"><a href="#">
<div>
<a href="index.php">
<img src="logot.jpg" alt="smashtheshell"></a>
</div>
<div>
<p style="font-size:110%;">
<a href="index.php">
SILVERADO
</a>
</p>
</div>

				<li><a href="prices.php">Prices</a></li>
								</li>
				<li><a href="Contact.php">Contact us</a></li>
<li><a href="about.php">About us</a></li>
			</ul>
		</nav>
	</header>
<script   src="https://code.jquery.com/jquery-1.11.3.min.js"   integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="   crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){

		var ulNav= "#nav", openNav = "active";

		$('.toggle-menu').click(function(e){

				if($(ulNav).hasClass(openNav)){
					$(ulNav).removeClass(openNav);
				}else{
					$(ulNav).addClass(openNav);
				}
				e.preventDefault();
		})
	})
</script>

</body>
</html>
