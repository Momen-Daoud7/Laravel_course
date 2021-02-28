<!DOCTYPE html>
<html>
<head>
	<title>Laravel First Project</title>
	<style>
		.active {
			color: red;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<header>
		<nav>
			<li>
				<a class="{{ request()->is('/') ? 'active': '' }}" href="/">Home</a>
			</li>
			<li>
				<a class="{{ request()->is('about/*') ? 'active': '' }}" href="/">about</a>
			</li>
			<li>
				<a class="{{ request()->is('contact/*') ? 'active': '' }}" href="/">conatct</a>
			</li>
		</nav>
	</header>

	@yiled('content')

	<footer>
		<div>
			<ul>
				<li>blogs</li>
				<li>Sitemap</li>
			</ul>
		</div>
	</footer>
</body>
</html>