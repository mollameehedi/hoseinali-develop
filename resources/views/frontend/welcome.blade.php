@extends('layouts.frontend_app')
@section('home')
    active
@endsection
@section('title')
Husein Ali
@endsection
@section('frontend_content')

		<!-- Banner Section -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-8">
						<h1 class="banner__title"><span class="first-word">{{ $banner->first_heading }}</span> {{ $banner->second_headding }}</h1>
						<p class="banner__text">{{ $banner->description }}</p>
						<div class="mt-5">
							<a href="{{ route('books') }}" class="primary-btn d-inline-block transition">Read All Book</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-4 mt-5 mt-md-0">
						<div class="banner__slider">
                            @foreach ($homebannerimgs as $homebannerimg)

							<div class="banner__slide d-flex align-items-center justify-content-center">
								<img src="{{ asset('uploads') }}/home/{{ $homebannerimg->img }}" alt="bg-book-3" class="banner__image img-fluid">
							</div>
                            @endforeach
						</div>
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
		<!-- About Section -->
		<section class="about section-gap">
			<div class="container">
				<div class="row">
					<div class="col-12 section-header position-relative text-center mb-5">
						<h1 class="section-header__title position-relative d-inline-block"><span class="first-letter">A</span>bout Me</h1>
					</div>
					<div class="col-12 text-center text-sm-left about__content">
						<img src="{{ asset('uploads') }}/about_bio/{{ $aboutbio->photo }}" alt="HuseinAli_transparent" class="about__image img-fluid text-center mb-4 mb-sm-0">
						<p class="about__text text-justify"><span class="first-letter">{{ $description1_first_letter }}</span>{{ $description1_other_content }}</p>
						<div class="text-center mt-5">
							<a href="{{ route('about') }}" class="primary-btn d-inline-block transition">Read More</a>
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
                    @foreach ($bestsellers as $bestseller)
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="./books.html" class="d-inline-block position-relative transition" style="--delay: 0;">
									<img src="{{ asset('uploads') }}/best_seller/{{ $bestseller->book_photo }}" alt="book-1" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="./books.html" class="transition">{{ $bestseller->book_name }}</a></h4>
						</div>
					</div>
                    @endforeach
					<div class="col-12 text-center mt-5">
						<a href="{{ route('books') }}" class="primary-btn d-inline-block transition">View All</a>
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
                                    @foreach ($book_lists as $book_list)
								  <tr>
									<th scope="row">1</th>
									<td class="book-name">{{ $book_list->book_list_name }}</td>
									<td class="text-center">
										<a href="{{ route('books') }}" class="primary-btn d-inline-block transition">Read Book</a>
										<a href="{{ route('book.list.download',$book_list->id) }}" class="primary-btn primary-btn--circle rounded-circle p-0 ml-3 d-inline-flex align-items-center justify-content-center transition">
											<i class="fas fa-download"></i>
										</a>
									</td>
								  </tr>
                                  @endforeach
								</tbody>
							</table>
						</div>
						<div class="text-center mt-5">
							<a href="{{ route('books') }}#book-list" class="primary-btn d-inline-block transition">All List</a>
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
						<p class="events__text">{{ $event->event }}</p>
					</div>
				</div>
			</div>
		</section>

@endsection
