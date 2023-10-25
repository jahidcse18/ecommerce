@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('admin/update-password') }}">@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="admin-email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"  value="{{ Auth::guard('admin')->user()->email}}">
                  </div>
                  <div class="form-group">
                    <label for="current_pwd">Old Password</label>
                    <input type="password" class="form-control" name="current_pwd" id="current_pwd" >
                    <span id="verifyCurrentPwd"></span>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="new_pwd">New Password</label>
                    <input type="password" class="form-control" name="new_pwd" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="confirm_pwd">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_pwd" id="exampleInputPassword1" placeholder="Password">
                  </div> -->

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        <div>
    <div>
    <div>
</section>
    <div>

    @endsection