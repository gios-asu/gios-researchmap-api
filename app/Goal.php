<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'is_primary',
        'order',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /*
     * Get the projects which are assigned to this goal
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project', 'projects_goals');
    }
}
