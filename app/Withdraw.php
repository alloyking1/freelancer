<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    //
    public function owner() {
        $this ->belongsTo('App\User');
    }
}
