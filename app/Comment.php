<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['comment', 'post_id', 'user_id'];
    public function post(){
    	return $this->belongsTo('App\Post');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
