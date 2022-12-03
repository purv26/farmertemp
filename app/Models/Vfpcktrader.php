<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Vfpcktrader extends Model
{
    
    protected $table ='vfpck_trader_register'; 

    protected $primary_key = 'id';
   
    protected $guarded = [];

    public $timestamps = false;

    function insertData($data)
    {
        return $this->insertGetId($data);
    }


}
