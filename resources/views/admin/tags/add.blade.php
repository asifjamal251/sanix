@extends('admin.layouts.app')


@section('main-content')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



    
    <div class="card-body pad">



     <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Tags</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('tag.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Title">
                  </div>
                 
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
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