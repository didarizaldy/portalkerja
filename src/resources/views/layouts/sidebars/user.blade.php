<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('university.index') }}" class="nav-link">
        <i class="nav-icon fas fa-chalkboard-teacher"></i>
        <p>
          Profil Perguruan Tinggi
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Kategori
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('cat.informatika') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Informatika
              <span class="badge badge-info right" id="count_informatika"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('cat.mesin') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Mesin
              <span class="badge badge-info right" id="count_mesin"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('cat.elektro') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Elektro
              <span class="badge badge-info right" id="count_elektro"></span>
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-laptop-house"></i>
        <p>
          Tipe
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('type.onsite') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Onsite
              <span class="badge badge-info right" id="count_informatika"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('type.remote') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Remote
              <span class="badge badge-info right" id="count_mesin"></span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('type.hybrid') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Hybrid
              <span class="badge badge-info right" id="count_elektro"></span>
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Logout</p>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
</nav>
