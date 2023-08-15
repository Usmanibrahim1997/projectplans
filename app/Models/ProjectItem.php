<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;


class ProjectItem extends Model
{
    use HasFactory;

    public function projectData()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }
}
