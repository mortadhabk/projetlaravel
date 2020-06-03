<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ protected $guarded = [];
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true ;
    public function user()
    {
          return $this->belongsTo(User::class);
    }
}
