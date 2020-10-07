<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\CourierType;

class Unit extends Model {

    protected $table = "units";
    // table fields
    protected $guarded = [];

    public function couriertypes() {
        return $this->hasMany(CourierType::class);
    }

}
