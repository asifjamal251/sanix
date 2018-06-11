@extends('user/app')
@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title','Sanix')
@section('sub-title','Technologies')


@section('main-content')

<style type="text/css">
  .index-content a:hover{
    color:black;
    text-decoration:none;
}
.index-content{
    margin-bottom:20px;
    /*padding:50px 0px;*/
    
}
.index-content .row{
    margin-top:20px;
}
.index-content a{
    color: black;
}
.index-content .card{
    background-color: #FFFFFF;
    padding:0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius:4px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
    overflow: hidden;

}
.index-content .card:hover{
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    color:black;
}
.index-content .card img{
    width:100%;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.index-content .card h4{
    margin:0px;
}
.index-content .card p{
    margin: 0px;
    opacity: 0.65;
    font-size: 16px;
    line-height: 20px;
    text-align: justify;
}
.index-content .blue-button{
    width: 100px;
    -webkit-transition: background-color 1s , color 1s; /* For Safari 3.1 to 6.0 */
    transition: background-color 1s , color 1s;
    min-height: 20px;
    background-color: #002E5B;
    color: #ffffff;
    border-radius: 4px;
    text-align: center;
    font-weight: lighter;
    margin: 0;
    margin-top: 10px;
    padding: 5px 0px;
    display: inline-block;
}
.index-content .blue-button:hover{
    background-color: #dadada;
    color: #002E5B;
}
@media (max-width: 768px) {

    .index-content .col-lg-4 {
        margin-top: 20px;
    }
}
.blog-home{
margin: 15px auto;
min-height: 420px;

}
small{
  font-size:12px;
}
.bg-img-blog{
  height: 200px;
    width: 348px;
    background-size: cover;
    background-position: center;
        border-radius: 4px 4px 0 0;
}
.blog-content{
  padding: 10px 15px;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="index-content">
    <div class="container">
      <div class="row">
       @foreach ($posts as $post)
                <div class="col-sm-4 blog-home">
                    <div class="card">
                       
                        <span class="bg-img-blog" style="background-image: url('@if($post->image != ""){{Storage::disk('local')->url($post->image)}} @else                http://cevirdikce.com/proje/hasem-2/images/finance-1.jpg @endif')"></span>
                        <div class="blog-content">
                          <small class="post-meta">Posted by
                          Start Bootstrap
                          on {{ $post->created_at->diffForHumans() }}
                        </small>
                        <h4>{{ $post->title }}</h4>
                        <p><strong>{{ $post->subtitle }}</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        <a href="{{route('post',$post->slug)}}" class="btn blue-button">Read More</a>
                      </div>
                    </div>
                </div>
            @endforeach
          </div>
          <div class="row">
          <div class="col-sm-12 clearfix">
            {{$posts->links()}}  
            </div>
          </div>
    </div>
       
</div>

{{--
<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          @foreach ($posts as $post)
            
            <div class="post-preview">
            <a href="{{route('post',$post->slug)}}">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{ $post->subtitle }}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on {{ $post->created_at->diffForHumans() }}</p>
          </div>
          <hr>

          @endforeach
          
          
          <!-- Pager -->
          <div class="clearfix">
            {{$posts->links()}}
            
          </div>
        </div>
      </div>
    </div>
--}}
@endsection
