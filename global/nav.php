

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="../index.php">LIS4381</a></li>
					<li><a href="../a1/index.php">A1</a></li>
					<li><a href="../a2/index.php">A2</a></li>
					<li><a href="../a3/index.php">A3</a></li>
					<li><a href="../a4/index.php">A4</a></li>
					<li><a href="../a5/index.php">A5</a></li>
					<style>
					
					/* Make the global nav navy->black and force readable link colors */
					.navbar.navbar-inverse {
						background-image: linear-gradient(to bottom, #003366 0%, #000 100%) !important;
						background-color: #003366 !important;
						border-color: #000 !important;
					}
					.navbar.navbar-inverse .navbar-brand,
					.navbar.navbar-inverse .navbar-nav > li > a {
						color: #fff !important;
					}
					.navbar.navbar-inverse .navbar-nav > li > a:hover,
					.navbar.navbar-inverse .navbar-brand:hover,
					.navbar.navbar-inverse .navbar-nav > li.active > a {
						background-color: #000 !important;
						color: #fff !important;
					}
					.navbar.navbar-inverse .navbar-toggle { border-color: #000 !important; }
					.navbar.navbar-inverse .icon-bar { background-color: #fff !important; }
					/* Keep the collapsed menu navy/black on small screens */
					.navbar.navbar-inverse .navbar-collapse,
					.navbar.navbar-inverse .navbar-collapse.in {
						background-image: linear-gradient(to bottom, #003366, #000) !important;
					}
					</style>

					<li><a href="../p1/index.php">P1</a></li>
					<li><a href="../p2/index.php">P2</a></li>
								
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

<?php
date_default_timezone_set('America/New_York');
$today = date("m/d/y g:ia");
echo $today;
 ?>
	

	
