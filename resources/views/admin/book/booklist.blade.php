@extends('layouts.dashboard_app')
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ Route('home') }}">Home</a>
        <span class="breadcrumb-item active">Banner content</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Books Page</h5>
        <p>Book List</p>
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
                  <th>view</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($book_lists as $book_list)
                  <tr>
                    <td>{{ $book_list->book_list_name }}</td>
                    <td><a href="{{ route('book.list.view', $book_list->id) }}" class="btn btn-primary">view</a></td>
                    <td><a href="{{ route('book.list.delete',$book_list->id) }}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-lg-4">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Add a new Book List</h5>
                  </div>
              @if (session('book_list_added'))
              <div class="alert alert-success">
                {{ session('book_list_added') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('book.list.store') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label>Book Item Name</label>
                        <input type="text" class="form-control" placeholder="Enter your book list name" name="book_list_name" required>
                     </div>
                     <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="75" width="75"/>
                     <br>
                    <label> Book List Item Photo <br><input type="file" name="book_list_photo" onchange="readURL(this);" required></label>
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
