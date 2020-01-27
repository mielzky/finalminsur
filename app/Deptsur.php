<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\str;

class Deptsur extends Model
{
    protected $guarded =[];

    public function publicPath() {
        return url('/surv/'.$this->id.'-'. Str::slug($this->dept));
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function surveys() {
        return $this->hasMany(Survey::class);
    }

    public function survs() {
        return $this->hasMany(Surv::class);
    }

    public function responses() {
        return $this->hasMany(SurvRes::class);
    }

    public function surv() {
        return $this->hasMany(Surv::class);
    }
}
