@extends('layouts.dashboard_app')
@section('title')
         Social | Lind
    @endsection
    @section('home')
        active
    @endsection
    @section('social')
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
        <h5>Social Icone</h5>
        <p>Social link List</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6">

              <table class="table table-bordered" id="product_table">

                <thead class="bg-prima">
                    @if (session('delete_status'))
                <div class="alert alert-danger">
                  {{ session('delete_status') }}
                </div>
            @endif
                  <th>Social Icon</th>
                  <th class="text-right">Action</th>
                </thead>
                <tbody>
                    @foreach ($social_links as $social_link)
                  <tr>
                    <td><a href="{{ $social_link->social_link}}"><i class="{{ $social_link->social_icon}}" ></i></a></td>
                    <td style="text-align:right"><a href="{{ route('social.delete', $social_link->id) }}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col-lg-6">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Add a new Book List</h5>
                  </div>
              @if (session('social_add'))
              <div class="alert alert-success">
                {{ session('social_add') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('social.store') }}">
                     @csrf
                     <div class="form-group">
                        <label> Social Icon  <a target="_blank" href="https://fontawesome.com/icons?d=gallery&p=2"> (icon bank)</a></label>
                        <input type="text" class="form-control" placeholder="Enter your Icone" name="social_icon" required>
                     </div>
                     <div class="form-group">
                        <label>Social Link</label>
                        <textarea name="social_link" class="form-control"  rows="5" placeholder="Enter you social Ling" required></textarea>
                     </div>
                    <button type="submit" class="mt-2 btn btn-primary dispay-block">Add a Social Link</button>
                   </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
