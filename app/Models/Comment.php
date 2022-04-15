<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
       'comment',
       'user_id',
    ];
    public function proof()
    {
        return $this->belongsto(Proof::class);
    }
    public function user()
    {
        return $this->belongsto(User::class);
    }

}
