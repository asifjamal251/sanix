@extends('admin.layouts.app')


@section('main-content')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



    
    <div class="card-body pad">



     <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Roles</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                         <!-- form start -->
            <form role="form" action="{{ route('permission.store') }}" method="post">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="name">Permission</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Permission">
                </div>

                <div class="form-group">
                  <label for="for">Permission for</label>
                  <select name="for" id="for" class="form-control">
                    <option selected disable>Select Permission for</option>
                    <option value="user">User</option>
                    <option value="post">Post</option>
                    <option value="other">Other</option>
                  </select>
                </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                
              </div>
                
              </div>
          
        </div>

            </form>
            </div>
        </div>
    
  </div>
  <!-- /.content-wrapper -->


@endsection