<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public function clients(){
      return $this->belongsTo('App\Clients');
    }
}
