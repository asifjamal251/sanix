@extends('admin.layouts.app')


@section('main-content')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



    
    <div class="card-body pad">

   

     <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Post</h3>
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('post.update', $post->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Sub title</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{$post->subtitle}}">
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{$post->slug}}">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="status" id="publish">
                    <label class="form-check-label" for="exampleCheck1" @if($post->status == 1) checked @endif>Publish</label>
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                

                
                <!-- /.card-body -->

                
              
           
            <!-- /.card -->


              <div class="mb-3">
                <textarea class="textarea" name="body" placeholder="Place some text here"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$post->body}}
                          </textarea>

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