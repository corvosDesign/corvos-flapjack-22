<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proof extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'approved',

    ];
    /**
     * Get the comment for the proof.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, "proof_id");
    }
    public function projects()
    {
        return $this->belongsto(Project::class, "project_id");
    }
}
