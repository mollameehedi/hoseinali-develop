@extends('layouts.frontend_app')
@section('about')
    active
@endsection
@section('title')
Husein Ali | about
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
							  <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
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
						<p class="about__text about__text--sm text-capitalize mt-5 text-center text-md-left">{{ $aboutbanner->description }}</p>
					</div>
					<div class="col-md-7 mb-5">
						<img src="{{ asset('uploads') }}/about_banner/{{ $aboutbanner->photo }}" alt="HuseinAli" class="img-fluid">
					</div>
					<div class="col-12 section-header position-relative text-center my-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">M</span>y Bio</h1>
					</div>
					<div class="col-12 text-center text-sm-left about__content">
						<img src="{{ asset('uploads') }}/about_bio/{{ $aboutbio->photo }}" alt="HuseinAli_transparent" class="about__image img-fluid text-center mb-4 mb-sm-0 d-none d-md-block">
						<p class="about__text text-justify"><span class="first-letter">{{ $description1_first_letter }}</span>{{ $description1_other_content }}</p>
						<p class="about__text text-justify">{{ $aboutbio->description2 }}</p>
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
                    @foreach ($bestsellers as $bestseller)
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="{{ route('books') }}" class="d-inline-block position-relative transition" style="--delay: 0;">
									<img src="{{ asset('uploads') }}/best_seller/{{ $bestseller->book_photo }}" alt="book-1" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="{{ route('books') }}" class="transition">{{ $bestseller->book_name }}</a></h4>
						</div>
					</div>
                    @endforeach
					<div class="col-12 text-center mt-5">
						<a href="{{ route('books') }}" class="primary-btn d-inline-block transition">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Single Banner Book Section -->
		<section class="single-book section-gap" style="background: url({{ asset('uploads/dream') }}/{{ $dream->book_photo }}) rgba(0, 0, 0, 0.5)">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center py-5">
						<h1 class="section-header__title text-white bg-transparent mb-5"><span class="first-letter">A</span> Foreigner with a dream</h1>
						<a href="{{ route('books') }}" class="primary-btn d-inline-block transition">Read This Book</a>
					</div>
				</div>
			</div>
		</section>
@endsection
