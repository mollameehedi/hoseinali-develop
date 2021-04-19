@extends('layouts.frontend_app')
@section('home')
    active
@endsection
@section('frontend_content')

		<!-- Banner Section -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-8">
						<h1 class="banner__title"><span class="first-word">Perfect</span> Landing Page For Your Book!</h1>
						<p class="banner__text">Finally, I always go to sea as a sailor, because of the wholesome exercise and pure air of the fore-castle deck. For as in this world, head winds are far more prevalent than winds from astern. </p>
						<div class="mt-5">
							<a href="./books.html" class="primary-btn d-inline-block transition">Read All Book</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-4 mt-5 mt-md-0">
						<div class="banner__slider">
							<div class="banner__slide d-flex align-items-center justify-content-center">
								<img src="{{ asset('frontend_asset') }}/images/bg-book-3.png" alt="bg-book-3" class="banner__image img-fluid">
							</div>
							<div class="banner__slide d-flex align-items-center justify-content-center">
								<img src="{{ asset('frontend_asset') }}/images/bg-book-4.png" alt="bg-book-4" class="banner__image img-fluid">
							</div>
						</div>
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
		<!-- About Section -->
		<section class="about section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 section-header position-relative text-center mb-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">A</span>bout Me</h1>
					</div>
					<div class="col-12 text-center text-sm-left about__content">
						<img src="{{ asset('frontend_asset') }}/images/HuseinAli_transparent.png" alt="HuseinAli_transparent" class="about__image img-fluid text-center mb-4 mb-sm-0">
						<p class="about__text text-justify"><span class="first-letter">H</span>ello there! This is Husein Ali, a bestselling author. He was born, raised, and still lives in Jackson, Mississippi. A former teen rapper, he holds a BFA in creative writing from Belhaven University. His award-winning, acclaimed debut novel, The Hate U Give, is a #1 New York Times bestseller and major motion picture from Fox 2000, starring Amandla Stenberg and directed by George Tillman, Jr. His second novel, On the Come Up, is a #1 NYT bestseller as well, and a film is in development with Paramount Pictures with Angie acting as a producer. In 2020, Angie released Find Your Voice: A Guided Journal to Writing Your Truth as a tool to help aspiring writers tell their stories. In 2021, Angie will return to the world of Garden Heights with Concrete Rose, a prequel to The Hate U Give that focuses on seventeen-year-old Maverick Carter.</p>
						<div class="text-center mt-5">
							<a href="./about.html" class="primary-btn d-inline-block transition">Read More</a>
						</div>
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
		<!-- Book List Section -->
		<section class="book-list section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 section-header position-relative text-center mb-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">B</span>ooks List</h1>
					</div>
					<div class="col-12 mt-3">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead class="table__head">
								  <tr>
									<th scope="col">Serial</th>
									<th scope="col">Books Name</th>
									<th scope="col" class="text-center">Action</th>
								  </tr>
								</thead>
								<tbody class="table__body">
								  <tr>
									<th scope="row">1</th>
									<td class="book-name">Art Design</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">2</th>
									<td class="book-name">Cover Design</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">3</th>
									<td class="book-name">Annual Report</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">4</th>
									<td class="book-name">Brochure</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">5</th>
									<td class="book-name">A Foreigner with a Dream <span class="book-name__highlighted">S-01</span></td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">6</th>
									<td class="book-name">A Foreigner with a Dream <span class="book-name__highlighted">S-02</span></td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">7</th>
									<td class="book-name">A Foreigner with a Dream <span class="book-name__highlighted">S-03</span></td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								</tbody>
							</table>
						</div>
						<div class="text-center mt-5">
							<a href="./books.html#book-list" class="primary-btn d-inline-block transition">All List</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Events Section -->
		<section class="events section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 section-header position-relative text-center mb-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">E</span>vents</h1>
					</div>
					<div class="col-12 text-center">
						<p class="events__text">No upcoming events are scheduled right now.</p>
					</div>
				</div>
			</div>
		</section>

@endsection
