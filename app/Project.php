<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ["title", "description", "created_at", "updated_at"];

    public function searchableAs()
    {
        return 'users_index';
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
