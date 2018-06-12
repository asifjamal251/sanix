@extends('frontend/app')
@section('body_class', 'home')
@section('main-content')

<div class="banner_top">
    <div class="slider">
      <div class="wrapper">
        <div class="agile_banner_text_info">
          <h3>Creative Thinker </h3>
          <p>Easy way to build Perfect websites</p>
          <div class="w3-button">
            <div class="w3ls-button">
              <a href="single.html" class="hvr-shutter-out-vertical">Read More</a>
            </div>
            <div class="w3l-button">
              <a href="#portfolio" class="hvr-shutter-out-vertical scroll ">Portfolio</a>
            </div>
            <div class="clearfix"> </div>
          </div>


        </div>
        <!-- Slideshow 3 -->
        <ul class="rslides" id="slider">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <!-- Slideshow 3 Pager -->
        <ul id="slider3-pager">
          <li><a href="#"><img src="{{asset('frontend/images/banner11.jpg')}}" data-selector="img" alt=""></a></li>
          <li><a href="#"><img src="{{asset('frontend/images/banner22.jpg')}}" data-selector="img" alt=""></a></li>
          <li><a href="#"><img src="{{asset('frontend/images/banner33.jpg')}}" data-selector="img" alt=""></a></li>
          <li><a href="#"><img src="{{asset('frontend/images/banner44.jpg')}}" data-selector="img" alt=""></a></li>

        </ul>
      </div>
    </div>
  </div>
  <!-- //banner -->


  <!-- banner-bottom -->
  <div class="banner-bottom">
    <div class="container">
      <div class="col-md-4 agileits_banner_bottom_left">
        <div class="agileinfo_banner_bottom_pos">
          <div class="w3_agileits_banner_bottom_pos_grid">
            <div class="col-xs-3 wthree_banner_bottom_grid_left">
              <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                <span class="fa fa-laptop" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-9 wthree_banner_bottom_grid_right">
              <h4>Digital Branding</h4>
              <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>

            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 agileits_banner_bottom_left">
        <div class="agileinfo_banner_bottom_pos">
          <div class="w3_agileits_banner_bottom_pos_grid">
            <div class="col-xs-3 wthree_banner_bottom_grid_left">
              <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                <span class="fa fa-pencil" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-9 wthree_banner_bottom_grid_right">
              <h4>Web Interactive</h4>
              <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>

            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 agileits_banner_bottom_left">
        <div class="agileinfo_banner_bottom_pos">
          <div class="w3_agileits_banner_bottom_pos_grid">
            <div class="col-xs-3 wthree_banner_bottom_grid_left">
              <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                <span class="fa fa-mobile" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-9 wthree_banner_bottom_grid_right">
              <h4>Graphic Design</h4>
              <p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>

            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- //banner-bottom -->

  

  <div class="portfolio-agileinfo" id="portfolio">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header">Latest <span>Posts</span></h3>
      </div>
    </div>
    <div class="agile_wthree_inner_grids">
      <div class="agile_port_w3ls_info">
        <div class="portfolio-grids_main">

          @foreach ($posts as $post)

          <div class="col-md-4 portfolio-grids gallery-grid1" data-aos="zoom-in">
            <a href="{{route('post',$post->slug)}}" class="b-link-stripe b-animate-go lightninBox">
                <img src="{{Storage::disk('local')->url($post->image)}}" class="img-responsive" alt="{{$post->title}}" />
                <div class="p-mask">
                  <h4><span>{{$post->title}}</span></h4>
                  <p>{{ $post->subtitle }}</p>
                </div>

              </a>
          </div>

           @endforeach

          <div class="clearfix"> </div>
        </div>
        

      </div>
    </div>
  </div>

@endsection
