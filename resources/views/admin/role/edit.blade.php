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
              <form role="form" action="{{ route('role.update', $role->id) }}" method="post">
                {{ csrf_field() }}
                 {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Title" value="{{$role->name}}">
                  </div>
                
                 
                  <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                      <label>Post Permissions</label>
                     
                     @foreach ($permissions as $permission)
                     @if ($permission->for == 'post')
                       <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="permission[]" value="{{$permission->id}}"
                      @foreach ($role->permissions as $role_permit)
                                          @if ($role_permit->id == $permission->id)
                                            checked
                                          @endif
                                        @endforeach

                      >
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
                      <input class="form-check-input" type="checkbox" name="permission[]" value="{{$permission->id}}"
                           @foreach ($role->permissions as $role_permit)
                                            @if ($role_permit->id == $permission->id)
                                              checked
                                            @endif
                                          @endforeach
                      >
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
                      <input class="form-check-input" type="checkbox" name="permission[]" value="{{$permission->id}}"
                      @foreach ($role->permissions as $role_permit)
                                            @if ($role_permit->id == $permission->id)
                                              checked
                                            @endif
                                          @endforeach
                                          >
                      <label class="form-check-label">{{$permission->name}}</label>
                    </div>
                     @endif
                     
                     @endforeach
                    </div>
                    </div>

                  </div>
                
              </div>


              </div>

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>


              </form>
            </div>
        </div>
    
  </div>
  <!-- /.content-wrapper -->


@endsection