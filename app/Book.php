<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function creator() {
    	return $this->belongsTo('App\User');
    }

    public function subject() {
    	return $this->belongsTo('App\Subject');
    }
}
