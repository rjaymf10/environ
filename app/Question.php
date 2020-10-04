<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function options() {
    	$shuffle = array_keys(json_decode($this->options));
    	shuffle($shuffle);
    	return $shuffle;
    }
}
