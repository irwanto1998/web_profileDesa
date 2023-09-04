<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
      <img src="{{ asset('ass') }}/img/logo.png" style="width: 50px; height: auto;" />
      <h5>Desa <span style="color: rgb(255, 0, 0)">Ampera Raya</span></h5>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
    <li class="menu-header small text-uppercase"><span class="menu-header-text">DATA</span></li>
    <li class="menu-item">
      <!-- Dashboard -->
      
      <li class="menu-item">
        <a href="{{ route('utamas.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Tables">Halaman Utama</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Pemerintahan</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('tentangs.index') }}" class="menu-link">
              <div data-i18n="Without menu">Tentang Desa</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('pemerintahs.index') }}" class="menu-link">
              <div data-i18n="Without navbar">Pemerintah</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ route('beritas.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div data-i18n="Tables">Berita Desa</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('users.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Analytics">User Admin</div>
        </a>
      </li>
    </li> 
  </ul>
</aside>
<!-- / Menu -->