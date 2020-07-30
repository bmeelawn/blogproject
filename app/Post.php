<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    // change table name
    // private $table = "posts";

    // primary key
    // public $primarykey = 'id';
    
    // timestamps
    // public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User');
    }

}
