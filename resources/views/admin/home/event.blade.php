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
        <p>Events</p>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6">

              <table class="table table-bordered" id="product_table">

                <thead class="bg-prima">

                  <th>Event Description</th>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $event->event }}</td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-6">
                <div class="card">
                  <div class="card-header bg-info text-white">
                    <h5>Event Description</h5>
                  </div>
              @if (session('event_updated'))
              <div class="alert alert-success">
                {{ session('event_updated') }}
              </div>
          @endif
                  <div class="card-body">
                   <form method="post" action="{{ route('even.upadate') }}">
                     @csrf
                     <div class="form-group">
                        <label>Update Event Description</label>
                        <textarea class="form-control" name="event" id="" placeholder="Event  Description" rows="5" required>{{ $event->event }}</textarea>
                     </div>
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
