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
        <p>Banner content</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">

              <table class="table table-bordered" id="product_table">

                <thead class="bg-prima">
                    @if (session('update_status'))
                <div class="alert alert-success">
                  {{ session('update_status') }}
                </div>
            @endif
                  <th colspan="50">Home banner text <a style="float:right" href="{{ route('home.banner.edit') }}" class="btn btn-info">Edit</a></th>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="0.50"><strong>First Heading</strong></td>
                    <td  colspan="30">{{ $banner->first_heading }}</td>
                  </tr>
                  <tr>
                      <td><strong>Second Heading</strong></td>
                    <td>{{ $banner->second_heading }}</td>
                  </tr>
                  <tr>
                      <td><strong>Description</strong></td>
                    <td>{{ $banner->description }}</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-6">

                <table class="table table-bordered" id="product_table">

                  <thead class="bg-prima">
                      @if (session('book_delete'))
                  <div class="alert alert-danger">
                    {{ session('book_delete') }}
                  </div>
              @endif
                    <th>banner photo</th>
                    <th class="text-right">Action</th>
                  </thead>
                  <tbody>
                      @foreach ($homebannerimgs as $homebannerimg)
                    <tr>
                      <td>
                          <img src="{{ asset('uploads/home/') }}/{{ $homebannerimg->img }}" alt="{{ $homebannerimg->img }}" style="height: 150px" class="img-fluid">
                      </td>
                      <td  class="text-right"><a href="{{ route('banner.img.delete',$homebannerimg->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header bg-info text-white">
                      <h5>Add a new Banner Photo</h5>
                    </div>
                @if (session('banner_img_added'))
                <div class="alert alert-success">
                  {{ session('banner_img_added') }}
                </div>
            @endif
                    <div class="card-body">
                     <form method="post" action="{{ route('home.banner.add') }}" enctype="multipart/form-data">
                       @csrf
                       <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="75" width="75"/>
                       <br>
                      <label><input type="file" name="img" onchange="readURL(this);" required></label>
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
