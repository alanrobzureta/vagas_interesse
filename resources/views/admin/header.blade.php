<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RH</b>ot</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="{{url('/')}}" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">RHot</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          

         
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset("../bower_components/AdminLTE/dist/img/user1-128x128.jpg") }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              @if (!Auth::guest())
                <span class="hidden-xs">{{Auth::user()->name}}</span>
              @else
                <span class="hidden-xs"></span>
              @endif
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset("../bower_components/AdminLTE/dist/img/user1-128x128.jpg") }}" class="img-circle" alt="User Image">
                @if (!Auth::guest())
                    <p>{{Auth::user()->name}}</p>
                @else
                    <p>
                        Adonai Diófanes - Web Developer
                        <small>Diretor-Presidente</small>
                    </p>
                @endif
                
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
