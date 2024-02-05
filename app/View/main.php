<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APPNAME ?></title>
    <!-- Bulma CSS  CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>

	<section class="section">
		<div class="container">
			<h1 class="title"><?= $heading ?></h1>
			<p></p>
			<nav class="breadcrumb" aria-label="breadcrumbs">
				<ul>
					<li class="is-active"><a href="/" aria-current="page">Home</a></li>
					<li ><a href="/home/users" >Users</a></li>
				</ul>
			</nav>
			<p>

				Simple MVC starting point for small PHP projects

				If you are learning or familliar with PHP and MVC architecture, this is a good starting point for smaller projects. There are few things to know:<br>
				<ul>
					<li>&bull; You can run this App from any web server that supports PHP 7.4 and higher</li>
					<li>&bull; I have uploaded examples for Model, View and Controller</li>
					<li>&bull; Don't expect too much, it's Super Simple</li>
				</ul>
			</p>
		</div>
</section>

</body>
</html>
