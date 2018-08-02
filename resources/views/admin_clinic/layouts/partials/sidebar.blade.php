<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link{{ checkRouteActive() }}" href="#">
          <span data-feather="home"></span>
          @lang('admin_clinic/layout.sidebar.dashboard')
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ checkRouteActive() }}" href="#">
          <span data-feather="calendar"></span>
          @lang('admin_clinic/layout.sidebar.calendar')
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ checkRouteActive() }}" href="#">
          <span data-feather="book-open"></span>
          @lang('admin_clinic/layout.sidebar.appointments')
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ checkRouteActive() }}" href="#">
          <span data-feather="align-justify"></span>
          @lang('admin_clinic/layout.sidebar.profile')
        </a>
      </li>
    </ul>
  </div>
</nav>