<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerItemquantityModel extends Model 
{
    protected $table = 'famer_item_quantity';

    protected $primary_key = 'id';

    protected $guarded = [];

    public $timestamps = false;

    function insertData($data)
    {
        return $this->insertGetId($data);
    }
}
