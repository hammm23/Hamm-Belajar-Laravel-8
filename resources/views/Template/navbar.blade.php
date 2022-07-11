<nav class="main-header navbar navbar-expand navbar-dark bg-danger">
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <form action="/logout" method="post">
           @csrf
           <button type="submit"><i class="fas fa-sign-out-alt" style="color: red"></i> Logout</button>
      </form>
      </li>
    </ul>
        
      </li>
    </ul>
  </nav>