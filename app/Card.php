<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function professions()
    {
        return $this->belongsToMany(Profession::class, 'card_profession', 'card_id', 'profession_id')->withTimestamps();
    }
}
