<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function posts()
    {
    	return $this->belongsToMany('Aap\Model\user\post','category_posts');
    }
}
