<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function skills()
    {
        return $this->hasMany(Skill::class, 'types');
    }
}
