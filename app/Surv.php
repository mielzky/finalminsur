<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surv extends Model
{
    protected $guarded = [];

    public function deptsur() {
        return $this->belongsTo(Deptsur::class);
    }

    public function responses() {
        return $this->hasMany(SurvRes::class);
    }
}
