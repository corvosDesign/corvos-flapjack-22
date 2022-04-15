<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address_line1',
        'phone',
        'extension',
    ];

    /**
     * Get the users for the company.
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
    /**
     * Get the projects for the company.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    /** get proofs through projects **/
    public function proofs()
    {
        return $this->hasManyThrough(Proof::class, Project::class);
    }


}
