@extends('layouts.dashboard_app')
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ Route('home') }}">Home</a>
        <span class="breadcrumb-item active">About</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>About Page</h5>
        <p>My Bio</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8">

              <table class="table table-bordered" id="product_table">

                <thead class="bg-prima">

                  <th>About bio Description pra 1</th>
                  <th>About bio Description pra 2</th>
                  <th>About bio Photo</th>
                </thead>
                <tbody>
                  <tr>
                      <td>{{ $aboutbio->description1}}"</td>
                      <td>{{ $aboutbio->description2}}"</td>
                    <td class="wd-200"><img src="{{ asset('uploads/about_banner/') }}/{{ $aboutbio->photo }}" alt="{{ $aboutbio->photo }}" style="width: 350px!important" class="img-fluid"></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-4">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Update Bio</h5>
                  </div>
              @if (session('about_bio'))
              <div class="alert alert-success">
                {{ session('about_bio') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('about.my.bio.update') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label>My Bio Description top</label>
                        <textarea name="description1" class="form-control" cols="30" rows="5" required>{{ $aboutbio->description1}}</textarea>
                     </div>
                     <div class="form-group">
                        <label>My Bio Description Bottom</label>
                        <textarea name="description2" class="form-control" cols="30" rows="5" required>{{ $aboutbio->description2}}</textarea>
                     </div>
                     <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="75" width="75"/>
                     <br>
                    <label><input type="file" name="photo" onchange="readURL(this);"></label>
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
