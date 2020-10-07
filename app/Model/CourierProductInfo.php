<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourierProductInfo extends Model {

    protected $table = "courier_product_infos";
    // table fields
    protected $guarded = [];

    public function courier_info() {
        return $this->belongsTo(CourierInfo::class);
    }

    public function courier_type() {
        return $this->belongsTo(CourierType::class, 'courier_type');
    }

}
