<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Unit;

class CourierType extends Model {

    protected $table = "courier_types";
    // table fields
    protected $guarded = [];

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function courier_product_infos() {
        return $this->hasMany(CourierProductInfo::class);
    }

}
