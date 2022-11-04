<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="vetd/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="vetd/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">

        </li>
       
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('appointment_view')}}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Appointments</span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      @include('vet.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <th style="padding: 10px; font-size: 20px">Name</th>
        <th style="padding: 10px; font-size: 20px">Email</th>
        <th style="padding: 10px; font-size: 20px">Phone</th>
        <th style="padding: 10px; font-size: 20px">Message</th>
        <th style="padding: 10px; font-size: 20px">History</th>
        <th style="padding: 10px; font-size: 20px">Remarks</th>

      </div>
       

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>