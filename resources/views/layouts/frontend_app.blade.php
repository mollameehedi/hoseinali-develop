<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Site Title -->
	<title>Husein Ali</title>
	<!-- Favicon Link -->
	<link rel="icon" type="image/x-icon" href="{{ asset('frontend_asset') }}/images/favicon.ico">
	<!-- All CSS -->
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/slick-slider/css/slick.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.min.css">
</head>
<body>
	<!-- Main Page Wrapper -->
	<main class="page-wrapper">
		<!-- Main Header Section -->
		<header class="header w-100 bg-white">
			<div class="header__top text-center py-3 border-bottom d-none d-md-block">
				<a class="page-logo" href="./index.html"><span class="first-letter">H</span>usein Ali</a>
			</div>
			<div class="header__bottom w-100 bg-white">
				<nav class="navbar navbar-expand-md">
					<div class="container">
						<a class="navbar-brand page-logo d-md-none mr-0" href="./index.html"><span class="first-letter">H</span>usein Ali</a>
						<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-bars"></i>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mx-auto">
								<li class="nav-item">
									<a class="nav-link @yield('home')" href="{{ route('/') }}">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link @yield('books')" href="{{ route('books') }}">Books</a>
								</li>
								<li class="nav-item">
									<a class="nav-link @yield('about')" href="{{ route('about') }}">About</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>


@yield('frontend_content')
<!-- Footer Section -->
<footer class="footer bg-white section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="social list-inline">
                    <li class="social__item list-inline-item mb-2 mb-sm-0">
                        <a href="https://www.facebook.com/coderexpertzahid/" target="_blank" class="social__link transition rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social__item list-inline-item mb-2 mb-sm-0">
                        <a href="https://twitter.com/ZahidHa45112113" target="_blank" class="social__link transition rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social__item list-inline-item mb-2 mb-sm-0">
                        <a href="#!" class="social__link transition rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="social__item list-inline-item mb-2 mb-sm-0">
                        <a href="mailto:deme@demo.com" class="social__link transition rounded-circle d-inline-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </li>
                </ul>
                <a class="page-logo d-inline-block my-4" href="./index.html"><span class="first-letter">H</span>usein Ali</a>
                <p class="copyright mt-4 mb-0">© COPYRIGHT <a href="./index.html" class="copyright__link">Husein Ali</a> 2021. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
</main>
<!-- Off Canvas/ Mobile Menu -->
<nav id="off-canvas-menu" class="off-canvas-menu d-flex align-items-center justify-content-center h-100">
<ul class="off-canvas-menu__nav text-center">
    <li class="off-canvas-menu__item">
        <a class="off-canvas-menu__link transition active" onClick="location.href='index.html'">Home</a>
    </li>
    <li class="off-canvas-menu__item">
        <a class="off-canvas-menu__link transition" onClick="location.href='books.html'">Books</a>
    </li>
    <li class="nav-item">
        <a class="off-canvas-menu__link transition" onClick="location.href='about.html'">About</a>
    </li>
</ul>
</nav>
<!-- Scroll Top Button -->
<div class="scroll-top position-fixed" title="Scroll To Top">
<span class="scroll-top__btn transition d-inline-flex align-items-center justify-content-center">
    <i class="fas fa-chevron-up"></i>
</span>
</div>

<!-- All Scripts -->
<script src="{{ asset('frontend_asset') }}/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontend_asset') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend_asset') }}/plugins/fontawesome/js/all.min.js"></script>
<script src="{{ asset('frontend_asset') }}/plugins/slick-slider/js/slick.js"></script>
<script src="{{ asset('frontend_asset') }}/js/script.js"></script>
<script>
// Banner slider
$(".banner__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: 'linear',
    speed: 500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    infinite: true,
});
</script>
</body>
</html>
