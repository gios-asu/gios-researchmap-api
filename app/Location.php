<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iso',
        'name',
        'size',
        'latitude',
        'longitude',
        'zoom',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /*
     * Get the projects associated with this location
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
