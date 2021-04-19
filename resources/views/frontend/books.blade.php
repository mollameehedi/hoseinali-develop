@extends('layouts.frontend_app')
@section('books')
    active
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
		<section class="sub-banner">
			<div class="container text-white py-4">
				<div class="row">
					<div class="col-sm-6 d-flex align-items-center justify-content-center justify-content-sm-start">
						<h1 class="sub-banner__title mb-0">Books</h1>
					</div>
					<div class="col-sm-6">
						<nav aria-label="breadcrumb">
							<ul class="breadcrumb bg-transparent justify-content-center justify-content-sm-end mb-0">
							  <li class="breadcrumb-item"><a href="./index.html" class="breadcrumb-link">Home</a></li>
							  <li class="breadcrumb-item active" aria-current="page">Books</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- My Books Section -->
		<section class="bestsellers section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 section-header position-relative text-center mb-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">M</span>y Books</h1>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 0;">
									<img src="{{ asset('frontend_asset') }}/images/book-5.png" alt="book-5" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Aquarius</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 1;">
									<img src="{{ asset('frontend_asset') }}/images/book-6.png" alt="book-6" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Capricorn</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 2;">
									<img src="{{ asset('frontend_asset') }}/images/book-7.png" alt="book-7" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Gemini</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 3;">
									<img src="{{ asset('frontend_asset') }}/images/book-8.png" alt="book-8" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Leo</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 4;">
									<img src="{{ asset('frontend_asset') }}/images/book-9.png" alt="book-9" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Pisces</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 5;">
									<img src="{{ asset('frontend_asset') }}/images/book-10.png" alt="book-10" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Taurus</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 6;">
									<img src="{{ asset('frontend_asset') }}/images/book-11.png" alt="book-11" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Aries</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 7;">
									<img src="{{ asset('frontend_asset') }}/images/book-12.png" alt="book-12" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Virgo</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 8;">
									<img src="{{ asset('frontend_asset') }}/images/book-13.png" alt="book-13" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Libra</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 9;">
									<img src="{{ asset('frontend_asset') }}/images/book-1.jpg" alt="book-1" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Art Design</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 10;">
									<img src="{{ asset('frontend_asset') }}/images/book-2.jpg" alt="book-2" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Cover Design</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 11;">
									<img src="{{ asset('frontend_asset') }}/images/book-3.jpg" alt="book-3" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Annual Report</a></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 12;">
									<img src="{{ asset('frontend_asset') }}/images/book-4.jpg" alt="book-4" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">Brochure</a></h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Book List Section -->
		<section id="book-list" class="book-list section-gap">
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
								  <tr>
									<th scope="row">8</th>
									<td class="book-name">Aquarius</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">9</th>
									<td class="book-name">Capricorn</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">10</th>
									<td class="book-name">Gemini</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">11</th>
									<td class="book-name">Leo</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">12</th>
									<td class="book-name">Pisces</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">13</th>
									<td class="book-name">Taurus</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">14</th>
									<td class="book-name">Aries</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">15</th>
									<td class="book-name">Virgo</td>
									<td class="text-center">
										<a href="./books.html" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ asset('frontend_asset') }}/books-pdf/cv-book.pdf" download="pdf-book" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
								  <tr>
									<th scope="row">16</th>
									<td class="book-name">Libra</td>
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
					</div>
				</div>
			</div>
		</section>
@endsection
