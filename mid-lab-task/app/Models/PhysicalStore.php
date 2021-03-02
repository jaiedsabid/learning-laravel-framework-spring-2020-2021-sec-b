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
}
