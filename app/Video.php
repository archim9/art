<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'title',
    	'url',
    	'description',
    ];

    /**
     * Film mam swojego autora
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
