<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderCollection extends Model
{
    protected $table = 'order_collections';
    protected $fillable = [
        'fullname',
        'kidsClass',
        'address',
        'adultSizeS',
        'adultSizeL',
        'adultSizeXL',
        'adultSizeXXL',
        'adultSizeXXXL',
        'adultSizeM',
        'kidsSizeS',
        'kidsSizeM',
        'kidsSizeL',
        'kidsSizeXXL',
        'kidsSizeXXXL',
        'kidsSizeXL',
        'collectUV',
        'adultOrderQtyS',
        'adultOrderQtyM',
        'adultOrderQtyL',
        'adultOrderQtyXL',
        'adultOrderQtyXXL',
        'adultOrderQtyXXXL',
        'kidsOrderQtyS',
        'kidsOrderQtyM',
        'kidsOrderQtyL',
        'kidsOrderQtyXXL',
        'kidsOrderQtyXXXL',
        'kidsOrderQtyXL',
        'status',
        'additionalVoucher',
        'calculateTotalOrderAdult',
        'calculateTotalOrderKids',
        'calculateGrandTotal',
        'accountNameSender',
        'bankSender',
        'accountSender',
        'phoneNumber',
    ];
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('l, d M Y H:i A');
    }
}
