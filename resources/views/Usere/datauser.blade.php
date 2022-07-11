
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
@include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('Template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
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
    <h1>Welcome Back, {{ auth()->user()->name }}</h1>
      <div class="card card-info card-outline">
        <div class="card-header"> 
          <div class="card-tools">
    <a href="{{ route('createuser') }}" class=" btn btn-success"> Add User  <i class="fas fa-plus-square"></i></a>
</div>
</div>

    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th>Change</th>
     
        </tr>
        @foreach ($DataUser as $item) 
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->username }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->password }}</td>
          <td>
          <a href="{{ route('edituser', $item->id) }}"><i class="fas fa-edit" style="color: green"></i></a> 

          | <a href="{{ route('deleteuser', $item->id) }}" class="fas fa-trash-alt" style="color: red"></a>
         
          </td>
  
          @endforeach

        </tr>
      </table>
</div>
</div>







  

