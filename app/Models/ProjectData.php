<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;
use App\Models\ProjectItem;

class ProjectData extends Model
{
    use HasFactory;

    public function Projects()
    {
        return $this->belongsTo(ProjectData::class);
    }

    public function projectItems()
    {
        return $this->hasMany(ProjectItem::class, 'project_data_id');
    }
}
