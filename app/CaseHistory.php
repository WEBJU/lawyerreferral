<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseHistory extends Model
{
  public function lawyer(){
    return $this->belongsTo('App\User');
  }
}
