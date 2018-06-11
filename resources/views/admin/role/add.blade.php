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
              <form role="form" action="{{ route('role.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Role Title</label>
                    <input type="text" class="form-control" id="role" name="name" placeholder="Role Title">
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label>Post Permissions</label>
                     
                     @foreach ($permissions as $permission)
                     @if ($permission->for == 'post')
                       <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="{{$permission->id}}">
                      <label class="form-check-label">{{$permission->name}}</label>
                    </div>
                     @endif
                     
                     @endforeach

                    
                  </div>

                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>User Permissions</label>
                    <div class="form-check">
                      @foreach ($permissions as $permission)
                     @if ($permission->for == 'user')
                       <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="{{$permission->id}}">
                      <label class="form-check-label">{{$permission->name}}</label>
                    </div>
                     @endif
                     
                     @endforeach
                    </div>
                    </div>

                  </div>

                   <div class="col-sm-4">
                      <div class="form-group">
                        <label>Other Permissions</label>
                    <div class="form-check">
                      @foreach ($permissions as $permission)
                     @if ($permission->for == 'other')
                       <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" value="{{$permission->id}}">
                      <label class="form-check-label">{{$permission->name}}</label>
                    </div>
                     @endif
                     
                     @endforeach
                    </div>
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