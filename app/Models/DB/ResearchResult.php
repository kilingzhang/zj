<?php

namespace App\Models\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class ResearchResult extends Model
{
    protected $table = 'research_results';

    public function setCreaterIdAttribute($value)
    {
        $this->attributes['creater_id'] = Cookie::get('id');
    }

    public function belongsToTeam()
    {
        return $this->belongsTo('App\Models\DB\Team', 'team_id', 'id');
    }

    public function belongsToTask()
    {
        return $this->belongsTo('App\Models\DB\Task', 'task_id', 'id');
    }
}
