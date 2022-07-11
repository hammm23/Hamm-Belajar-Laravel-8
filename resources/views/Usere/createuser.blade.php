
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
@include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark bg-danger">
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <form action="/datauser">
           @csrf
           <button type="submit"><i class="fas fa-angle-left" style="color: red"></i> Back to Data User</button>
      </form>
      </li>
    </ul>
        
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('Template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <h1 class="h2" style="font-size:180%;" style="font-family:verdana;">Welcome Back, {{ auth()->user()->name }}</h1>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    

    <!-- Main content -->
    
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
<h3 style="font-size:120%;">Create New User</h3>
</div>
<form action="{{ route('createuser') }}" method="post">
  {{ csrf_field() }}
      <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name"></label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username"></label>
          @error('username')       
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}" >
          <label for="email"></label>
          @error('email')       
          <div class="invalid-feedback">
            {{ $message }}
          </div>  
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password"></label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
      </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Save Data</button>
      </form>
</div>
</div>












</div>
</div>







  
