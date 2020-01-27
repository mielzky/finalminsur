<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurvRes extends Model
{
    protected $guarded = [];

    public function surv() {
        return $this->belongsTo(Surv::class);
    }

    public function survs() {
        return $this->belongsTo(Surv::class);
    }
}
