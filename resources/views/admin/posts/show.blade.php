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
              <h3 class="float-left">Posts</h3>
               @can('posts.create', Auth::user())
          <a class='col-lg-offset-5 btn btn-success float-right' href="{{ route('post.create') }}">Add New</a>
        @endcan
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th >Si No.</th>
                  <th>Post Name</th>
                  <th>Slug</th>
                   @can('posts.update', Auth::user())
                   <th>Edit</th>
                   @endcan
                   @can('posts.delete', Auth::user())
                    <th>Delete</th>
                   @endcan
                  <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                              
                                @can('posts.update', Auth::user())
                                   <td>
                                <a href="{{ route('post.edit',$post->id) }}"><span class="glyphicon glyphicon-edit"></span>Edit</a>

                               </td>
                                @endcan

                                 @can('posts.delete', Auth::user())
                                <td>
                                <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $post->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                     @endcan
                              </td>
                              <td>{{ $post->created_at }}</td>
                            </tr>
                        @endforeach
                </tbody>
              </table>
              <div id="pagination" class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }} entries {{--(for page {{ $posts->currentPage() }} )--}}
                </div>

                <div class="col-sm-6">
                  {{ $posts->links()}}
                </div>
             </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
         
          </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footerSection')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
  });
</script> -->
@endsection