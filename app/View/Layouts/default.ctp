<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('kickstart');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery');
		echo $this->Html->script('kickstart');
		
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div id="container" class="grid">
	<header>
		<div class="col_6 column">
			<h1><a href="index.html"><strong>Job</strong>Board</a></h1>
		</div>
		<div class="col_6 column right">
			<form id="add_job_link">
				<button class="large green"><i class="icon-plus"></i>Add Job</button>
			</form>
		</div>
	</header>

		<div class="col_12 column">
			<!-- 
					NAV MENU
			-->
			<ul class="menu">
				<li class="current"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li><a href=""><i class="fa fa-inbox"></i> Browse Jobs</a></li>
				<li><a href=""><i class="fa fa-desktop"></i> Register</a></li>
				<li><a href=""><i class="fa fa-user"></i> Login</a></li>
			</ul>
		</div>
		
		<!-- 
					POST METHOD
		-->
		<div id="search_area" class="col_12 column">
			<form class="horizontal" method="post" action="#">
			
				<input id="keywords" type="text" name="keywords" placeholder="Enter Keywords..." />
				
				<select id="state_select">
					<option>Select State</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
				</select>
				
				<select id="category_select">
					<option>Select Category</option>
					<option>Accounting & Banking</option>
					<option>Construction</option>
					<option>Fashion & Style</option>
					<option>Food & Restaurant</option>
					<option>Healthcare</option>
					<option>Retail & Sales</option>
					<option>Technology</option>
				</select>
				
				<button type="submit">Submit</button>
		 
			</form>
		</div>
		
		<div class="col_12 column">
			<h3>Latest Job Listings</h3>
			
			<ul id="listings">
				<li>
					<div class="type">
						<span class="green">Full Time</span>
					</div>
					<div class="description">
						<h5>Senior Graphic Designer (Washington, WS)</h5>
						Eos audiam pericula percipitur ex. Ut qualisque mediocritatem mea. 
						Homero pertinacia nec ex. Aeque postea vel cu, graecis vivendo 
						necessitatibus te eam. Ad quo dolore singulis neglegentur, eum ne 
						quodsi timeam instructior.
						<a href="details.html"><i class="icon-plus"></i> Read more</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="blue">Part Time</span>
					</div>
					<div class="description">
						<h5>Senior Graphic Designer (Washington, WS)</h5>
						Eos audiam pericula percipitur ex. Ut qualisque mediocritatem mea. 
						Homero pertinacia nec ex. Aeque postea vel cu, graecis vivendo 
						necessitatibus te eam. Ad quo dolore singulis neglegentur, eum ne 
						quodsi timeam instructior.
						<a href="details.html"><i class="icon-plus"></i> Read more</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="blue">Part Time</span>
					</div>
					<div class="description">
						<h5>Senior Graphic Designer (Washington, WS)</h5>
						Eos audiam pericula percipitur ex. Ut qualisque mediocritatem mea. 
						Homero pertinacia nec ex. Aeque postea vel cu, graecis vivendo 
						necessitatibus te eam. Ad quo dolore singulis neglegentur, eum ne 
						quodsi timeam instructior.
						<a href="details.html"><i class="icon-plus"></i> Read more</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="blue">Part Time</span>
					</div>
					<div class="description">
						<h5>Senior Graphic Designer (Washington, WS)</h5>
						Eos audiam pericula percipitur ex. Ut qualisque mediocritatem mea. 
						Homero pertinacia nec ex. Aeque postea vel cu, graecis vivendo 
						necessitatibus te eam. Ad quo dolore singulis neglegentur, eum ne 
						quodsi timeam instructior.
						<a href="details.html"><i class="icon-plus"></i> Read more</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="blue">Part Time</span>
					</div>
					<div class="description">
						<h5>Senior Graphic Designer (Washington, WS)</h5>
						Eos audiam pericula percipitur ex. Ut qualisque mediocritatem mea. 
						Homero pertinacia nec ex. Aeque postea vel cu, graecis vivendo 
						necessitatibus te eam. Ad quo dolore singulis neglegentur, eum ne 
						quodsi timeam instructior.
						<a href="details.html"><i class="icon-plus"></i> Read more</a>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
		
		<footer>
			<p>Copyright @copyright; 2016, JobBoard, All Rights Reserved</p>
		</footer>
		
	</div> <!-- End Grid -->
</body>
</html>
