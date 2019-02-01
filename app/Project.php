<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectWasCreated;

class Project extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => ProjectWasCreated::class
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($attributes)
    {
        return $this->tasks()->create($attributes);
    }
}
