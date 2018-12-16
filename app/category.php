<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



  class Category extends Model
{
    /**
     * Get the posts.
     */
    public function posts()
    {
        return $this->hasMany('App\Post', 'Category_id');
    }
}

class Post extends Model
{
    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'Category_id');
    }
}

  public function getRouteKeyName()
	{
   return 'name'
	}
}
