<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <li class="nav-item">
          <a onclick="toggleValue('sidebar-collapse')" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="{{ isset(Auth::user()->image) && Auth::user()->image ? Auth::user()->image : asset('image/user.png') }}"
                  class="user-image img-circle elevation-2" alt="{{ Auth::user()->name }}">
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
                <img src="{{ isset(Auth::user()->image) && Auth::user()->image ? Auth::user()->image : asset('image/user.png') }}"
                      class="img-circle elevation-2"
                      alt="{{ Auth::user()->name }}">
                <p>
                    {{ Auth::user()->name }}
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <a href="{{route('profile')}}" class="btn btn-primary btn-flat">Profile</a>
                <a href="#" class="btn btn-danger btn-flat float-right" role="button"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
  </ul>
</nav>