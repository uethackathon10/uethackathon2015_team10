<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function creator() {
    	return $this->belongsTo('App\User');
    }

    public function users() {
    	return $this->belongsToMany('App\User');
    }

    public function recommended_subjects() {
    	return $this->belongsToMany('App\Subject');
    }

    public function advanced_subject() {
    	return $this->belongsToMany('App\Subject');
    }

    public function books() {
    	return $this->hasMany('App\Book');
    }

    public function websites() {
    	return $this->hasMany('App\Website');
    }

    public function persons() {
    	return $this->hasMany('App\Person');
    }
}