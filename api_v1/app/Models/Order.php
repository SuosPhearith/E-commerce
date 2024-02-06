<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "address",
        "city",
        "country",
        "postal_code",
        "phone",
        "email",
        "status",
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
