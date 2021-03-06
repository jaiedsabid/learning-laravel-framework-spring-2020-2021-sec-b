<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalStore extends Model
{
    use HasFactory;

    protected $table = 'physical_store';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'product_id',
        'product_name',
        'unit_price',
        'quantity',
        'total_price',
        'date_sold',
        'payment_type',
        'status'
    ];
}
