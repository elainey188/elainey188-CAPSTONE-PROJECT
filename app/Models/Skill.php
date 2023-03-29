<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $primaryKey = 'skill_id';

    protected $fillable = [
        'name',
        'description',
    ];

    public function resumes()
    {
        return $this->belongsToMany(Resume::class);
    }
}
