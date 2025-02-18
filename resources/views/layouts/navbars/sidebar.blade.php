<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Bravo Cotações') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Administrador') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{($activePage == 'profile' || $activePage == 'user' ) ? ' show' : ''}}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> <i class="material-icons">person</i> </span>
                <span class="sidebar-normal">{{ __('Meu Perfil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> <i class="material-icons">people</i> </span>
                <span class="sidebar-normal"> {{ __('Usuários') }} </span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="sidebar-mini"> <i class="material-icons">logout</i> </span>
                <span class="sidebar-normal"> {{ __('Sair') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Painel de Controle') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'historico' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#cotacaoCollapse" aria-expanded="true">
          <i class="material-icons">currency_exchange</i>
          <p>{{ __('Cotações') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{$activePage == 'historico' ? ' show' : ''}}" id="cotacaoCollapse">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'historico' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cotacao/historico') }}">
                <span class="sidebar-mini"> <i class="material-icons">attach_money</i> </span>
                <span class="sidebar-normal">{{ __('Histórico de Cotação') }} </span>
              </a>
            </li>


            <!-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="sidebar-mini"> <i class="material-icons">logout</i> </span>
                <span class="sidebar-normal"> {{ __('Sair') }} </span>
              </a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>