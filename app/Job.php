<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_name', 'company_logo', 'users_id', 'slug', 'date', 'jobdesc', 'position'
    ];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo('App/User');
    }
}
