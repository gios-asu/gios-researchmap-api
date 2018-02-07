<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_iso',
        'name',
        'description',
        'slug',
        'sdg',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /*
     * Get the locations to which this project is assigned
     */
    public function locations()
    {
        return $this->belongsToMany('App\Location', 'projects_locations');
    }
}
