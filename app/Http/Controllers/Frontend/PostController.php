<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;

class PostController extends Controller
{
    public function post(post $post){
   	       return view('frontend.single',compact('post'));
   }
}
