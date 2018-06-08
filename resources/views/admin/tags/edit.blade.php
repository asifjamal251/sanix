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
              <form role="form" action="{{ route('tag.update', $tag->id) }}" method="post">
                {{ csrf_field() }}
                 {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Title" value="{{$tag->name}}">
                  </div>
                 
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{$tag->slug}}">
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