  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" >

        <a class="nav-link   @if (Request::segment(2) !='dashboard') collapsed   @endif"
        href="{{url('panel/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item" >
        <a class="nav-link  @if (Request::segment(2) !='user') collapsed   @endif"
         href="{{url('panel/user/list')}}">
          <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      </li><!-- End Profile Page Nav -->




      <li class="nav-item" >
        <a class="nav-link @if (Request::segment(2) !='category') collapsed   @endif"
        href="{{url('panel/category/list')}}">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item" @if (Request::segment(2) !='blog') collapsed   @endif>
        <a class="nav-link collapsed" href="{{url('panel/blog/list')}}">
          <i class="bi bi-person"></i>
          <span>blog</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item" @if (Request::segment(2) !='help') collapsed   @endif>
        <a class="nav-link collapsed" href="{{url('panel/help/list')}}">
          <i class="bi bi-question-circle"></i>
          <span>Help</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item" @if (Request::segment(2) !='inbox') collapsed   @endif>
        <a class="nav-link collapsed" href="{{url('panel/inbox/list')}}">
          <i class="bi bi-envelope"></i>
          <span>Inbox</span>
        </a>
      </li><!-- End Contact Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->
