<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Detail extends Model
{
    //
    protected $table = "sales_detail";
    protected $fillable = [
        'item_name', 'qty', 'item_price'
    ];
}
