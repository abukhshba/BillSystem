<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_id',
        'product_id',
        'product_price',
        'quantity',
        'total'
    ];
}