<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerModel extends Model
{
    protected $table = 'farmer_group';

    protected $primary_key = 'id';

    protected $guarded = [];

    public $timestamps = false;

    function insertData($data)
    {
        return $this->insertGetId($data);
    }
}
