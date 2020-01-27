<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [];

    public function deptsur() {
        return $this->belongsTo(Deptsur::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function responses() {
        return $this->hasMany(SurvRes::class);
    }

    public function remarks() {
        return $this->hasMany(Surv::class);
    }
}
