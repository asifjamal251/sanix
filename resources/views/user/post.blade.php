@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('title',$post->title)
@section('sub-title',$post->subtitle)

@section('main-content')

<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1934176766893473&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <article>
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-10 mx-auto">
             <small>Created at: {{ $post->created_at->diffForHumans() }}</small>
             {{-- Category --}}
               @foreach ($post->categories as $category)
               <a href="{{ route('category',$category->slug) }}">
                 <small class="float-right" style="margin-left:15px;">
                  {{ $category->name }}
                </small>
                </a>
               @endforeach
             
            {!! $post->body !!}
             {{-- Tag --}}
             @foreach ($post->tags as $tag)
             <a href="{{ route('tag',$tag->slug) }}">
                 <small class="float-right" style="margin-left:15px;">
                  {{ $tag->name }}
                  </small>
                </a>
            @endforeach

          </div>
          <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10"></div>
        </div>
      </div>
    </article>

@endsection