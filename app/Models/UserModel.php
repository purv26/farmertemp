<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    
    protected $table ='farmer_register'; 

    protected $primary_key = 'id';
    protected $fillable = [
        'name',
        'lastname',
        'phonenumber',
        'emailid',
        'address',
        'village',
        'district',
        'pincode',
        'state',
        'shgname',
        'adharnumber',
        'username',
        'password',
    ];

    protected $guarded = [];

    public $timestamps = false;

    function insertData($data)
    {
        return $this->insertGetId($data);
    }


}
