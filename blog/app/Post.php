<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content'];
    protected $table = 'posts';
    protected $primaryKey = 'id_post';
   // public $timestamps = false;

    public function user()
    {
        return $this->belongsTo("App\User");
    }
    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i',strtotime($value));
      //  return date("d. m. Y H:i:s",strtotime($value));
    }
}
