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
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
