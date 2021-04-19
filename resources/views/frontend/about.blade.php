@extends('layouts.frontend_app')
@section('about')
    active
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
		<section class="sub-banner">
			<div class="container text-white py-4">
				<div class="row">
					<div class="col-sm-6 d-flex align-items-center justify-content-center justify-content-sm-start">
						<h1 class="sub-banner__title mb-0">About</h1>
					</div>
					<div class="col-sm-6">
						<nav aria-label="breadcrumb">
							<ul class="breadcrumb bg-transparent justify-content-center justify-content-sm-end mb-0">
							  <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
							  <li class="breadcrumb-item active" aria-current="page">About</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section -->
		<section class="about section-gap">
			<div class="container">
				<div class="row">
					<div class="col-md-5 d-flex flex-column align-items-center align-items-md-start justify-content-center mb-md-5">
						<h1 class="section-header__title about__title"><span class="first-letter">H</span>usein Ali</h1>
						<p class="about__text about__text--sm text-capitalize mt-5 text-center text-md-left">Inspiring Novelist and Award-Winning Author</p>
					</div>
					<div class="col-md-7 mb-5">
						<img src="{{ asset('frontend_asset') }}/images/HuseinAli.jpg" alt="HuseinAli" class="img-fluid">
					</div>
					<div class="col-12 section-header position-relative text-center my-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">M</span>y Bio</h1>
					</div>
					<div class="col-12 text-center text-sm-left about__content">
						<img src="{{ asset('frontend_asset') }}/images/HuseinAli_transparent.png" alt="HuseinAli_transparent" class="about__image img-fluid text-center mb-4 mb-sm-0 d-none d-md-block">
						<p class="about__text text-justify"><span class="first-letter">H</span>ello there! This is Husein Ali, a bestselling author. He was born, raised, and still lives in Jackson, Mississippi. A former teen rapper, he holds a BFA in creative writing from Belhaven University. His award-winning, acclaimed debut novel, The Hate U Give, is a #1 New York Times bestseller and major motion picture from Fox 2000, starring Amandla Stenberg and directed by George Tillman, Jr. His second novel, On the Come Up, is a #1 NYT bestseller as well, and a film is in development with Paramount Pictures with Angie acting as a producer. In 2020, Angie released Find Your Voice: A Guided Journal to Writing Your Truth as a tool to help aspiring writers tell their stories. In 2021, Angie will return to the world of Garden Heights with Concrete Rose, a prequel to The Hate U Give that focuses on seventeen-year-old Maverick Carter.</p>
						<p class="about__text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium placeat itaque iusto asperiores doloribus dolor tenetur, rem commodi molestias! Recusandae dolorem ullam commodi ea praesentium dolorum officia, officiis sequi eos? Quisquam ducimus nemo quae, accusantium sunt soluta expedita vel saepe asperiores laborum delectus blanditiis rem ea vero nesciunt voluptas fuga labore. Atque, rerum minima! Illo, et! Optio porro nam cum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quam blanditiis rem! Explicabo ullam saepe, veniam nesciunt iure veritatis facere voluptatibus magnam dolores quisquam aut molestiae dolore quos nobis autem nam atque sed ratione provident debitis deleniti. Tempore cumque quas accusamus odit adipisci libero eligendi eum voluptatum! Incidunt debitis accusamus unde nesciunt! Commodi ex dolor alias explicabo velit iste ipsa tempore ratione deserunt similique eius maiores voluptas eaque, fuga eos, earum non? Magnam facilis recusandae in culpa sapiente! Laboriosam, ipsum?</p>
					</div>
				</div>
			</div>
		</section>
		<!-- My Bestsellers Section -->
		<section class="bestsellers section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 section-header position-relative text-center mb-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">M</span>y Bestsellers</h1>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 0;">
									<img src="{{ asset('frontend_asset') }}/images/book-1.jpg" alt="book-1" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Art Design</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 1;">
									<img src="{{ asset('frontend_asset') }}/images/book-2.jpg" alt="book-2" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Cover Design</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 2;">
									<img src="{{ asset('frontend_asset') }}/images/book-3.jpg" alt="book-3" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Annual Report</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 3;">
									<img src="{{ asset('frontend_asset') }}/images/book-4.jpg" alt="book-4" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Brochure</a></h4>
						</div>
					</div>
					<div class="col-12 text-center mt-5">
						<a href="./books.html" class="primary-btn d-inline-block transition">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Single Banner Book Section -->
		<section class="single-book section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center py-5">
						<h1 class="section-header__title text-white bg-transparent mb-5"><span class="first-letter">A</span> Foreigner with a dream</h1>
						<a href="./books.html" class="primary-btn d-inline-block transition">Read This Book</a>
					</div>
				</div>
			</div>
		</section>
@endsection
