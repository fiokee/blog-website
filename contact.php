<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Reporter - HTML Blog Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <a class="navbar-brand order-1 py-0" href="index.php">
        <img loading="prelaod" decoding="async" class="img-fluid" src="images/logo.png" alt="Reporter Hugo">
      </a>
      <div class="navbar-actions order-3 ml-0 ml-md-4">
        <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
          data-target="#navigation"> <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <form action="#!" class="search order-lg-3 order-md-2 order-3 ml-auto">
        <input id="search-query" name="s" type="search" placeholder="Search..." autocomplete="off">
      </form>
      <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
        <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
          <li class="nav-item"> <a class="nav-link" href="about.html">About Me</a>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Articles
            </a>
            <div class="dropdown-menu"> <a class="dropdown-item" href="travel.html">Travel</a>
              <a class="dropdown-item" href="travel.html">Lifestyle</a>
              <a class="dropdown-item" href="travel.html">Cruises</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<main>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumbs mb-4"> <a href="index.html">Home</a>
						<span class="mx-1">/</span>  <a href="#!">Contact</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pr-0 pr-lg-4">
						<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor.
							<div class="mt-5">
								<p class="h3 mb-3 font-weight-normal"><a class="text-dark" href="mailto:hello@reporter.com">hello@reporter.com</a>
								</p>
								<p class="mb-3"><a class="text-dark" href="tel:&#43;211234565523">&#43;211234565523</a>
								</p>
								<p class="mb-2">9567 Turner Trace Apt. BC C3G8A4</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<form method="POST" action="#!" class="row">
						<div class="col-md-6">
							<input type="text" class="form-control mb-4" placeholder="Name" name="name" id="name">
						</div>
						<div class="col-md-6">
							<input type="email" class="form-control mb-4" placeholder="Email" name="email" id="email">
						</div>
						<div class="col-12">
							<input type="text" class="form-control mb-4" placeholder="Subject" name="subject" id="subject">
						</div>
						<div class="col-12">
							<textarea name="message" id="message" class="form-control mb-4" placeholder="Type You Message Here" rows="5"></textarea>
						</div>
						<div class="col-12">
							<button class="btn btn-outline-primary" type="submit">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

<footer class="bg-dark mt-5">
  <div class="container section">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <a class="d-inline-block mb-4 pb-2" href="index.php">
          <img loading="prelaod" decoding="async" class="img-fluid" src="images/logo-white.png" alt="Reporter Hugo">
        </a>
        <ul class="p-0 d-flex navbar-footer mb-0 list-unstyled">
          <li class="nav-item my-0"> <a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item my-0"> <a class="nav-link" href="article.html">Elements</a></li>
          <li class="nav-item my-0"> <a class="nav-link" href="privacy-policy.html">Privacy Policy</a></li>
          <li class="nav-item my-0"> <a class="nav-link" href="terms-conditions.html">Terms Conditions</a></li>
          <li class="nav-item my-0"> <a class="nav-link" href="404.html">404 Page</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright bg-dark content">Designed &amp; Developed By <a href="https://themefisher.com/">Themefisher</a></div>
</footer>


<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>