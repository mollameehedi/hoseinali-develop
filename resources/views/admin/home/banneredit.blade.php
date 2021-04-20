@extends('layouts.dashboard_app')
@section('title')
        Home | Banner | Edit
    @endsection
    @section('home')
        active
    @endsection
    @section('home_banner')
        active
    @endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ Route('home') }}">Home</a>
        <span class="breadcrumb-item active">Banner content Edit</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Home Page</h5>
        <p>Banner content</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header card-header-default bg-info">
                        <h5>Banner content Edit</h5>

                    </div>
                    <div class="card-body">

                         <form method="post" action="{{ route('home.banner.update',1) }}">
                            @csrf
                             <div class="form-group">
                                <label>First Heading</label>
                                <input type="text" class="form-control" placeholder="First Headinge" name="first_heading" value="{{ $banner->first_heading }}" required>
                             </div>
                             <div class="form-group">
                                <label>Second Heading</label>
                                <input type="text" class="form-control" placeholder="Second Headinge" name="second_heading" value="{{ $banner->second_heading }}" required>
                             </div>
                             <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="" placeholder="Description" rows="5" required>{{ $banner->description }}</textarea>
                             </div>
                             <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change</button>
                             </div>
                         </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
