@extends('layouts.dashboard_app')
@section('title')
        Book | Best Seller
    @endsection
@section('book')
    active
@endsection
@section('bestseller')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ Route('home') }}">Home</a>
        <span class="breadcrumb-item active">Banner content</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Books Page</h5>
        <p>My Books</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8">

              <table class="table table-bordered" id="product_table">

                <thead class="bg-prima">
                    @if (session('book_delete'))
                <div class="alert alert-danger">
                  {{ session('book_delete') }}
                </div>
            @endif
                  <th>Book Name</th>
                  <th>Book Photo</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($bestsellers as $bestseller)
                  <tr>
                    <td>{{ $bestseller->book_name }}</td>
                    <td>
                        <img src="{{ asset('uploads/best_seller/') }}/{{ $bestseller->book_photo }}" alt="{{ $bestseller->book_photo }}" style="height: 150px" class="img-fluid">
                    </td>
                    <td><a href="{{ route('best.seller.delete',$bestseller->id) }}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-lg-4">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Add a new Book</h5>
                  </div>
              @if (session('book_added'))
              <div class="alert alert-success">
                {{ session('book_added') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('bestseller.store') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" class="form-control" placeholder="Enter your book name" name="book_name" required>
                     </div>
                     <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="75" width="75"/>
                     <br>
                    <label> Book Photo <br><input type="file" name="book_photo" onchange="readURL(this);" required></label>
                    <style>
                      .hidden{
                        display: none;
                      }
                    </style>
      <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#tenant_photo_viewer').attr('src', e.target.result).width(150).height(195);
          };
          $('#tenant_photo_viewer').removeClass('hidden');
          reader.readAsDataURL(input.files[0]);
        }
      }
      </script>
                    <br>
                    <button type="submit" class="mt-2 btn btn-primary dispay-block">Add a Book</button>
                   </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
