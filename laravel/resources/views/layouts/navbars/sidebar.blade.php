<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ secure_asset('material') }}/img/login.jpg">
  <div class="logo">
    <a class="simple-text logo-normal">
      {{ __('Binnentuinapp') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'bestellingen' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('bestellingen.index') }}">
          <i class="material-icons">store</i>
            <p>{{ __('Bestellingen') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'producten' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('producten.index') }}">
          <i class="material-icons">fastfood</i>
            <p>{{ __('Producten') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'pretest' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('pretest.index') }}">
                <i class="material-icons">content_paste</i>
                <p>{{ __('Pretest resultaten') }}</p>
            </a>
        </li>
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">person</i>
          <p>{{ __('Account Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal">{{ __('Mijn Profiel') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> GM </span>
                <span class="sidebar-normal"> {{ __('Gebruikers Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
