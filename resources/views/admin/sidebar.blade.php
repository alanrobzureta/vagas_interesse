<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("../bower_components/AdminLTE/dist/img/user1-128x128.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            @if (!Auth::guest())
                <p>{{Auth::user()->name}}</p>
            @else
                <p>Adonai Diófanes</p>
            @endif
          
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        @can('listar_empresas',Auth::user())
            <li class="active"><a href="{{url('/empresas/')}}"><i class="fa fa-industry"></i> <span>Empresas</span></a></li>
        @endcan
        @can('listar_planos',Auth::user())
            <li><a href="{{url('/planos/')}}"><i class="fa fa-rub"></i> <span>Planos</span></a></li>
        @endcan
        <li><a href="#"><i class="fa fa-link"></i> <span>Extras</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gears"></i> <span>Gerenciamento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('listar_usuarios',Auth::user())
                <li><a href="{{url('/users/')}}">Usuários</a></li>
            @endcan
            @can('listar_perfis',Auth::user())
                <li><a href="{{url('/perfis/')}}">Perfis</a></li>
            @endcan
            @can('listar_permissoes',Auth::user())
                <li><a href="{{url('/permissoes/')}}">Permissões</a></li>
            @endcan            
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>