
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Husein Ali')</title>

    <!-- vendor css -->

    <link href="{{ asset('dashboard_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/all.min.css">
    <link href="{{ asset('dashboard_asset') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('dashboard_asset') }}/img/favicon.png" type="image/gif" sizes="16x16">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/starlight.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Husein Ali</a></div>
    <div class="sl-sideleft">


      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ url('/home') }}" class="sl-menu-link @yield('deshboard')">
          <div class="sl-menu-item">
            <i class="fas fa-house-user tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link @yield('home')">
          <div class="sl-menu-item">
            <i class="fas fa-home tx-20"></i>
            <span class="menu-item-label">home</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('home.banner') }}" class="nav-link @yield('home_banner')">Banner</a></li>
          <li class="nav-item"><a href="{{ route('social.index') }}" class="nav-link @yield('social')">Social link</a></li>
          <li class="nav-item"><a href="{{ route('foreigner.dream') }}" class="nav-link @yield('dream')">A Foreigner with a dream</a></li>
          <li class="nav-item"><a href="{{ route('event.index') }}" class="nav-link @yield('events')">Events</a></li>
        </ul>

        <a href="#" class="sl-menu-link @yield('book')">
          <div class="sl-menu-item">
            <i class="fa fa-book tx-20"></i>
            <span class="menu-item-label">Books</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('book.my.book') }}" class="nav-link @yield('mybook')">My Books</a></li>
          <li class="nav-item"><a href="{{ route('book.book.list') }}" class="nav-link @yield('booklist')">Book List</a></li>
          <li class="nav-item"><a href="{{ route('bestseller.index') }}" class="nav-link @yield('bestseller')">My Bestsellers</a></li>
        </ul>
        <a href="#" class="sl-menu-link @yield('about')">
            <div class="sl-menu-item">
              <i class="fas fa-address-card tx-20"></i>
              <span class="menu-item-label">About</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('about.banner') }}" class="nav-link @yield('about_banner')">about banner</a></li>
            <li class="nav-item"><a href="{{ route('about.my.bio') }}" class="nav-link @yield('about_bio')">My Bio</a></li>
          </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::User()->name }}</span>
              <img src="{{ asset('uploads') }}/profile/{{ Auth::user()->profile_photo }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ Route('profile.index') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="{{ route('register') }}"><i class="icon ion-ios-person-outline"></i>Register A person</a></li>
                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="icon ion-power"></i> Sign Out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>

      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{ asset('dashboard_asset') }}/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->
    @yield('dashboard_content')




<script src="{{ asset('dashboard_asset') }}/lib/jquery/jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/popper.js/popper.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables-responsive/dataTables.responsive.js"></script>

<script src="{{ asset('dashboard_asset') }}/js/starlight.js"></script>
@yield('footer_scripts')
</body>
</html>
