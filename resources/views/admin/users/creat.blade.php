@extends('admin.layouts.app')


@section('main-content')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



    
    <div class="card-body pad">



     <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Username</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="email" name="password" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="conform_password">Conform Password</label>
                    <input type="password" class="form-control" id="conform_password" name="conform_password" placeholder="Conform Password">
                  </div>

                  <div class="form-group">
                    <label for="conform_password">Assign Role</label>
                    <div class="form-group">

                      @foreach ($roles as $role)
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="role[]" value="{{$role->id}}">
                      <label class="form-check-label">{{$role->name}}</label>
                    </div>
                      @endforeach

                    

                  </div>

                  </div>

              </div>

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>


              </form>
            </div>
        </div>
    
  </div>
  <!-- /.content-wrapper -->


@endsection