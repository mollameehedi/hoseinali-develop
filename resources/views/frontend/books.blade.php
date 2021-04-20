@extends('layouts.frontend_app')
@section('books')
    active
@endsection
@section('title')
Husein Ali | books
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
							  <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
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
                    @foreach ($books as $book)
					<div class="col-lg-3 col-md-4 col-sm-6 mt-5">
						<div class="bestsellers__block text-center">
							<div class="bestsellers__block__image">
								<a href="{{ route('books') }}" class="d-inline-block position-relative transition" style="--delay: 0;">
									<img src="{{ asset('uploads') }}/books/{{ $book->book_photo }}" alt="book-5" class="w-100 h-100 transition">
								</a>
							</div>
							<h4 class="bestsellers__block__title mt-5"><a href="{{ route('books') }}" class="transition">{{ $book->book_name }}</a></h4>
						</div>
					</div>
                    @endforeach
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
                                    @foreach ($book_lists as $book_list)
                                    <tr>
                                      <th scope="row">{{ $loop->index+1 }}</th>
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
					</div>
				</div>
			</div>
		</section>
@endsection
