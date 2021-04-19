@extends('layouts.dashboard_app')
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

                  <th>About banner Description</th>
                  <th>About banner Photo</th>
                </thead>
                <tbody>
                  <tr>
                      <td>{{ $aboutbanner->description }}"</td>
                    <td><img src="{{ asset('uploads/about_banner/') }}/{{ $aboutbanner->photo }}" alt="{{ $aboutbanner->photo }}" style="width: 350px" class="img-fluid"></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-6">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Update About Banner Content</h5>
                  </div>
              @if (session('about_banner'))
              <div class="alert alert-success">
                {{ session('about_banner') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('about.banner.update') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label>Banner Description</label>

                        <input type="text" class="form-control" name="description" required>
                     </div>
                     <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="75" width="75"/>
                     <br>
                    <label><input type="file" name="photo" onchange="readURL(this);" required></label>
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
