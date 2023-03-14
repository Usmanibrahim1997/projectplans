<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectData;


class ProjectItem extends Model
{
    use HasFactory;

    public function projectDetailData()
    {
        return $this->belongsToMany(ProjectData::class, 'id');
    }
}
