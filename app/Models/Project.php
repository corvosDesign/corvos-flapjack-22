<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'open',
        'project_start',
        'project_end',

    ];
    /**
     * Get the proofs for the project.
     */
    public function proofs()
    {
        return $this->hasMany(Proof::class);
    }
    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Proof::class);
    }
    //belongs to client
    public function client()
    {
        return $this->belongsto(Client::class);
    }


}
