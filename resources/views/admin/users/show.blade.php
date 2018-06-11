@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
<div class="card-body pad">
     <div class="card">
            <div class="card-header">
              <h3 class="float-left">Users</h3>
              <a class="btn btn-success float-right" href="{{ route('user.create') }}">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="max-width:80px" >Si No.</th>
                  <th>User Name</th>
                  <th>Assign Roles</th>
                  <th>Status</th>
                  <th style="max-width:80px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                          <tr>
                            <td style="max-width:80px">{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                              @foreach ($user->roles as $role)
                                {{$role->name}},
                              @endforeach
                              

                            </td>
                            <td>{{$user->status? 'Active' : 'Not Active'}}</td>
                              <td style="max-width:80px"><a class="" href="{{ route('user.edit',$user->id) }}"><i class="fa fa-edit"></i></span></a>
                                 / 
                                <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy',$user->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $user->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
                            </tr>
                        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footerSection')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection