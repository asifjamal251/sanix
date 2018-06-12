@extends('frontend/app')
@section('head')
<link rel="stylesheet" href="{{asset('frontend/css/blog.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/single.css')}}">
@endsection
@section('bg-img', asset('frontend/images/banner2.jpg') )
@section('bg-class', 'inner')

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

   


   <!-- /blog -->
  <div class="banner-bottom inner">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header">Single <span>Page</span></h3>
      </div>
      <div class="agile_wthree_inner_grids">
        <div class="col-md-8 single-left">
          <div class="single-left1">
            <img src="{{Storage::disk('local')->url($post->image)}}" alt=" " class="img-responsive" />
            <h3>Sed ut perspiciatis unde omnis iste natus error sit facilisis erat posuere erat</h3>
            <ul>
              <li><span class="fa fa-user" aria-hidden="true"></span><a href="#">Michael Smith</a></li>
              <li><span class="fa fa-tag" aria-hidden="true"></span><a href="#">5 Tags</a></li>
              <li><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="#">5 Comments</a></li>
            </ul>
            <p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse
              ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
              rhoncus nec nibh non, mollis sodales odio. Nullam facilisis diam non magna porta luctus. Aenean facilisis erat posuere
              erat ornare ultrices. Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
              <i>Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi et 
              lacinia. Aliquam maximus iaculis mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur orci efficitur nec.</i>              In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse
              ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
              rhoncus nec nibh non, mollis sodales odio.</p>
          </div>
          <div class="single-left2">
            <div class="col-md-6 single-left2-left">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">At vero eos et accusamus iusto</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Sed ut perspiciatis unde omnis iste</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Accusantium doloremque laudantium</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Vel illum qui dolorem eum fugiat quo</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Quis autem vel eum iure reprehenderit</a></li>

              </ul>
            </div>
            <div class="col-md-6 single-left2-left">
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">At vero eos et accusamus et iusto</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Sed ut perspiciatis unde omnis iste</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Accusantium doloremque laudantium</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Vel illum qui dolorem eum fugiat quo</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Quis autem vel eum iure reprehenderit</a></li>

              </ul>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="admin">
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give
              you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder
              of human happiness. No one rejects, dislikes, or avoids pleasure itself.</p>
            <a href="#"><i>John Frank</i></a>
          </div>
          <div class="comments">
            <h3>Our Recent Comments</h3>
            <div class="comments-grids">
              <div class="comments-grid">
                <div class="comments-grid-left">
                  <img src="images/3.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                  <h4><a href="#">Michael Crisp</a></h4>
                  <ul>
                    <li>5 June 2017 <i>|</i></li>
                    <li><a href="#">Reply</a></li>
                  </ul>
                  <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus
                    id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="comments-grid">
                <div class="comments-grid-left">
                  <img src="images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                  <h4><a href="#">Adam Lii</a></h4>
                  <ul>
                    <li>8 June 2017 <i>|</i></li>
                    <li><a href="#">Reply</a></li>
                  </ul>
                  <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus
                    id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="comments-grid">
                <div class="comments-grid-left">
                  <img src="images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                  <h4><a href="#">Richard Carl</a></h4>
                  <ul>
                    <li>11 June 2017 <i>|</i></li>
                    <li><a href="#">Reply</a></li>
                  </ul>
                  <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus
                    id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
              </div>

            </div>
          </div>
          <div class="leave-coment-form">
            <h3>Leave Your Comment</h3>
            <form action="#" method="post">
              <input type="text" name="Name" placeholder="Name" required="">
              <input type="email" name="Email" placeholder="Email" required="">
              <textarea name="Message" placeholder="Your comment here..." required=""></textarea>
              <div class="w3_single_submit">
                <input type="submit" value="Submit Comment">
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-4 event-right wthree-event-right">
          <div class="event-right1 agileinfo-event-right1">
            <div class="search1 agileits-search1">
              <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search here..." required="">
                <input type="submit" value="Send">
              </form>
            </div>
            <div class="categories w3ls-categories">
              <h3>Categories</h3>
              <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">At vero eos et accusamus iusto</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Sed ut perspiciatis unde omnis</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Accusantium doloremque lauda</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Vel illum qui dolorem fugiat quo</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="single.html">Quis autem vel eum reprehenderit</a></li>

              </ul>
            </div>
            <div class="posts w3l-posts">
              <h3>Our Events</h3>
              <div class="posts-grids w3-posts-grids">
                <div class="posts-grid w3-posts-grid">
                  <div class="posts-grid-left w3-posts-grid-left">
                    <a href="single.html"><img src="images/g3.jpg" alt=" " class="img-responsive" /></a>
                  </div>
                  <div class="posts-grid-right w3-posts-grid-right">
                    <h4><a href="single.html">Sed ut perspiciatis unde omnis iste natus</a></h4>
                    <ul class="wthree_blog_events_list">
                      <li><i class="fa fa-calendar" aria-hidden="true"></i>10/7/2017</li>
                      <li><i class="fa fa-user" aria-hidden="true"></i><a href="single.html">Admin</a></li>
                    </ul>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="posts-grid w3-posts-grid">
                  <div class="posts-grid-left w3-posts-grid-left">
                    <a href="single.html"><img src="images/g6.jpg" alt=" " class="img-responsive" /></a>
                  </div>
                  <div class="posts-grid-right w3-posts-grid-right">
                    <h4><a href="single.html">Neque porro quisquam qui dolorem</a></h4>
                    <ul class="wthree_blog_events_list">
                      <li><i class="fa fa-calendar" aria-hidden="true"></i>12/7/2017</li>
                      <li><i class="fa fa-user" aria-hidden="true"></i><a href="single.html">Admin</a></li>
                    </ul>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <div class="tags tags1 w3layouts-tags">
              <h3>Recent Tags</h3>
              <ul>
                <li><a href="single.html">Designs</a></li>
                <li><a href="single.html">Growth</a></li>
                <li><a href="single.html">Latest</a></li>
                <li><a href="single.html">Price</a></li>
                <li><a href="single.html">Tools</a></li>
                <li><a href="single.html">Agile</a></li>
                <li><a href="single.html">Category</a></li>
                <li><a href="single.html">Themes</a></li>
                <li><a href="single.html">Growth</a></li>
                <li><a href="single.html">Agile</a></li>
                <li><a href="single.html">Price</a></li>
                <li><a href="single.html">Tools</a></li>
                <li><a href="single.html">Business</a></li>
                <li><a href="single.html">Category</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //blog -->


@endsection