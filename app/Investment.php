<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    public function owner() {
        $this ->belongsTo('App\User');
    }
}
