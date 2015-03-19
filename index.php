<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 900px)" />
<script  type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script>
function show(){
			$("#link").slideToggle("slow");
		}

</script>
</head>
<body>
   <section id="wrapper">
   <header style="padding:2px;"></header>
	<nav class="nav">
	<span>My Blog</span><img src="images/down.png" onclick="show();" style="width:20px;">
			<ul id="link">
				<a href="#" style="font-weight:bold;"><li>Home</li></a>
				<a href="#"><li>Portfolio</li></a>
				<a href="#"><li>Blog</li></a>
				<a href="#"><li>About</li></a>
				<a href="#"><li>Contact</li></a>
				<a href="#"><li>About</li></a>
			</ul>
			<div style="clear:both;"></div>
		</nav>
		<div id="main">
		<div id="upper">
			<div id="first" class="mobile-collapse" >
				<img src="images/1.jpg">
				<h1>This block is for the title of the latest blog post</h1>
				<p>
					This is photoshop version of Lorem ipsum.This is photoshop version of Lorem ipsum.
					This is photoshop version of Lorem ipsum.This is photoshop version of Lorem ipsum.
				</p>
			</div>
			<div id="middle" class="mobile-collapse">
				<img src="images/2.jpg">
				<h1>This block is for the title of the latest blog post</h1>
				<p>
					This is photoshop version of Lorem ipsum.This is photoshop version of Lorem ipsum.
					This is photoshop version of Lorem ipsum.This is photoshop version of Lorem ipsum.
				</p>
			</div>
			<div id="last" class="mobile-collapse">
				<img src="images/3.jpg">
				<h1>This block is for the title of the latest blog post</h1>
				<p>
					This is photoshop version of Lorem ipsum.This is photoshop version of Lorem ipsum.
					This is photoshop version of Lorem ipsum.This is photoshop version of Lorem ipsum.
				</p>
			</div>
		</div>
		<div id="lower">

			<div id="left">
			<h1>This block is for the title of the latest blog post</h1>
				<p>
					In the constantly transforming global bussiness scenario, if there is anything that holds prime importance
					and goes beyond the Technology Transformation, it would without doubt be the Space. A good location 
					is a catalyst to business productivity. A good location is a catalyst to business productivity.
					In the constantly transforming global bussiness scenario, if there is anything that holds prime importance
					and goes beyond the Technology Transformation, it would without doubt be the Space. A good location 
					is a catalyst to business productivity. A good location is a catalyst to business productivity.
				</p>			
			</div>
			<div class="right">
				<div id="lower_up" class="hide-mobile">
				<p>
					In the constantly transforming global bussiness scenario, if there is anything that holds prime importance
					and goes beyond the Technology Transformation, it would without doubt be the Space.
				</p>
				</div>
				<div id="lower_middle" class="hide-mobile">
				<p>
					In the constantly transforming global bussiness scenario, if there is anything that holds prime importance
					and goes beyond the Technology Transformation, it would without doubt be the Space.
				</p>
				</div>
				<div id="lower_bottom" class="hide-mobile">
				<p>
					In the constantly transforming global bussiness scenario, if there is anything that holds prime importance
					and goes beyond the Technology Transformation, it would without doubt be the Space.
				</p>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
		</div>
   </section>
   <footer><p>Here is my blog site.</p></footer>
</body>
</html>