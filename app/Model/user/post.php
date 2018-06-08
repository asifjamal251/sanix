<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public function tags()
    {
      return $this->belongsToMany('App\Model\user\tag','post_tags');
    }

    public function categories()
    {
    	return $this->belongsToMany('Aap\Model\user\post','category_posts');
    }
}
