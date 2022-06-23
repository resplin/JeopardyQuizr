<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>resplin.com - Jeoparty</title>

		<!-- Bootstrap core CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="/css/narrow-jumbotron.css" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<div class="header clearfix">
				<nav>
					<ul class="nav nav-pills float-right">
						<li class="nav-item">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/About/">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/Contact/">Contact</a>
						</li>
					</ul>
				</nav>
				<h3 class="text-muted"><a href="/">resplin.com</a></h3>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="main">
						<h1 class="text-center mt-3">JEO-PARTY</h1>
						<p class="text-center">Play a random Jeopardy clue.</p>
						<br />

						<div class="alert alert-success" role="alert">
							<h2 id="category" class="text-uppercase text-center"></h2>
						</div>

						<h3 id="question" class="text-center"></h3>
						<br />

						<div class="row pb-3">
							<div class="col-sm-12">
								<h4 id="answer-outer" class="text-center" style="border: 1px dashed green;">
									<p id="answer-inner" class="invisible mt-2 mb-3"></p>
								</h4>
							</div>
						</div>

						<div class="row pb-3 justify-content-end">
							<div class="col-sm-12">
								<button id="buttonRandom" type="button" class="btn btn-primary">Get New Question</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
				<p class="text-center">resplin.com</p>
			</footer>
		</div>

		<!-- JQuery -->
		<script src="/js/vendor/jquery-3.2.1.min.js"></script>

		<!-- Popper -->
		<script src="/js/vendor/popper.min.js"></script>

		<!-- Page-specific scripts -->
		<script src="/js/Jeoparty.js"></script>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
