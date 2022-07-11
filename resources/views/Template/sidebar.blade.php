 <aside class="main-sidebar sidebar-dark bg-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-center">
      <span class="brand-text"><b>Sadasa Academy</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="mt-3 pb-3 mb-3 d-flex">    
        <div class="image">
         <img src="{{asset('Gambar/white-logo.png')}}" class="center" width="210" alt="Sadasa">     
        </div>
       
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">    
            <a href="/" class="nav-link active">
              <i class="fas fa-home"></i>
              <p>
                 <b>Home</b>
              </p>
            </a>
      
            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item menu-open">
            <a href="/about" class="nav-link active">
              <i class="far fa-address-card"></i>
              <p>
                 <b>About</b>
              </p>
            </a>

            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item menu-open">
            <a href="/blog" class="nav-link active">
              <i class="fas fa-book"></i>
              <p>
                 <b>Blog</b>
              </p>
            </a>

          <li class="nav-item">
            <a href=" {{ route('datauser') }} " class="nav-link"></a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>