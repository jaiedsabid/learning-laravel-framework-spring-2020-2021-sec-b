<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;
    //const CREATED_AT = "Create_Time";
    //const UPDATED_AT = "Update_Time";
}
