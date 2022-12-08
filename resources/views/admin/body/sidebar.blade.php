<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header">
      <a href="index.html" class="brand-logo">
        
        <img src="{{ asset('backend/assets/images/skyapp.png') }}" alt="logo">
      </a>
    </div>
    @php
    $user = DB::table('users')->where('id',Auth::user()->id)->first();
  @endphp
    <div class="mdc-drawer__content">
      <div class="user-info">
        <p class="name">{{ $user->name }}</p>
        <p class="email">{{ $user->email }}</p>
      </div>
      <div class="mdc-list-group">
        <nav class="mdc-list mdc-drawer-menu">
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="{{ route('dashboard') }}">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
              Dashboard
            </a>
          </div>
          
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link"  href="{{ route('users.view') }}">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
              Users
            </a>
          </div>

          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="profile-page-submenu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
             Profile
              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="profile-page-submenu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="{{ route('profile.view') }}">
                  My Profile
                  </a>
                </div>
              
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="{{ route('password.view') }}">
                    Change Password
                  </a>
                </div>
              </nav>
            </div>
          </div>

          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="classes-page-submenu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
Student              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="classes-page-submenu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="#">
                  Students List
                  </a>
                </div>
              
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="#">
                    Register Student
                  </a>
                </div>
              </nav>
            </div>
          </div>

          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/tables/basic-tables.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
              Classes
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="pages/charts/chartjs.html">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
              Teachers
            </a>
          </div>
        


          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="#" target="_blank">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
              Examination
            </a>
          </div>
        </nav>
      </div>
      <div class="profile-actions">
        <a href="javascript:;">Settings</a>
        <span class="divider"></span>
        <a href="javascript:;">Logout</a>
      </div>
      <div class="mdc-card premium-card">
        <div class="d-flex align-items-center">
          <div class="mdc-card icon-card box-shadow-0">
            <i class="mdi mdi-shield-outline"></i>
          </div>
          <div>
            <p class="mt-0 mb-1 ml-2 font-weight-bold tx-12">SkySchool App</p>
            <p class="mt-0 mb-0 ml-2 tx-10">Complete Project available</p>
          </div>
        </div>
        <p class="tx-8 mt-3 mb-1">Request for Complete Project.</p>
        <p class="tx-8 mb-3">Starting from $25.</p>
        <a href="#" target="_blank">
                      <span class="mdc-button mdc-button--raised mdc-button--white">You can Call Now   </span>
                  </a>
      </div>
    </div>
  </aside>