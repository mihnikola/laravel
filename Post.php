<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable=[
    'number','client_id'
  ];
  public function client()
  {
    return $this->belongsTo(App\Client::class);
  }
}
