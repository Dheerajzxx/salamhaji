<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
  use SoftDeletes;
  
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'name',
    'status',
  ];

  public function local_fares() : HasMany
  {
    return $this->hasMany(LocalFare::class);
  }


}
