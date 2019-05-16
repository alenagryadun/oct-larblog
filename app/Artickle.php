<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artickle extends Model
{
     /**
   * Массово присваиваемые атрибуты.
   *
   * @var array
   */
  protected $fillable = ['name'];
  
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
