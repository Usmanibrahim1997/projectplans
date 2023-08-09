<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
      <div class="logo-src-new"></div>
      <div class="header__pane ml-auto">
        <div><button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div>
      </div>
    </div>
    <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
          <li class="app-sidebar__heading">Dashboard</li>
          <li>
            <a href="{{ route('home') }}" class="mm-active"><i class="metismenu-icon pe-7s-rocket"></i> 
                Dashboard
            </a>
        </li>
          <li class="app-sidebar__heading">Components</li>
          <li>
            <a href="#"><i class="metismenu-icon pe-7s-culture"></i> Departments</a>
            <ul>
              <li><a href="{{ route('department_form') }}" ><i class="metismenu-icon"></i> Add Department</a></li>
              <li><a href="{{ route('department_list') }}"><i class="metismenu-icon"></i> Department List</a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="metismenu-icon pe-7s-diamond"></i> Elements</a>
            <ul>
              <li><a href="{{ route('project_form') }}"><i class="metismenu-icon"></i> Add Project</a></li>
              <li><a href="{{ route('invite.form') }}"><i class="metismenu-icon"></i> Add Client</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</div>