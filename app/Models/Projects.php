<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;
use App\Models\ProjectItem;

class Projects extends Model
{
    use HasFactory;

    public function projectDetails()
    {
        return $this->hasMany(ProjectData::class , 'project_id');
    }
    public function projectItems()
    {
        return $this->hasMany(ProjectItem::class , 'project_id');
    }
}
