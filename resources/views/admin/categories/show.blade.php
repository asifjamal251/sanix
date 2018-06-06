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
              <h3 class="float-left">categorys</h3>
              <a class="btn btn-success float-right" href="{{ route('category.create') }}">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th >Si No.</th>
                  <th>category Name</th>
                  <th>Slug</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                              <td><a href="{{ route('category.edit',$category->id) }}"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                                 / 
                                <form id="delete-form-{{ $category->id }}" method="post" action="{{ route('category.destroy',$category->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $category->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="glyphicon glyphicon-trash"></span> Delete</a>
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