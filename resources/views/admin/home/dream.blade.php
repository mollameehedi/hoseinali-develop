@extends('layouts.dashboard_app')
@section('title')
        Home | Dream
    @endsection
    @section('home')
        active
    @endsection
    @section('dream')
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
        <h5>Home Page</h5>
        <p>A Foreigner with a dream</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6">

              <table class="table table-bordered" id="product_table">

                <thead class="bg-prima">

                  <th>Background Photo</th>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="{{ asset('uploads/dream/') }}/{{ $dream->book_photo }}" alt="{{ $dream->book_photo }}" style="height: 150px" class="img-fluid"></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-6">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Update background Photo</h5>
                  </div>
              @if (session('dream_img_added'))
              <div class="alert alert-success">
                {{ session('dream_img_added') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('foreigner.dream.add') }}" enctype="multipart/form-data">
                     @csrf
                     <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="75" width="75"/>
                     <br>
                    <label><input type="file" name="book_photo" onchange="readURL(this);" required></label>
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
                    <button type="submit" class="mt-2 btn btn-primary dispay-block">Change</button>
                   </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
