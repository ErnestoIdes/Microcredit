<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'districts';

    //Primary Key
    public $primaryKey = 'id';

    //Time Stamps
    public $timestamps = 'true';

    # Disable auto increment
    // public $incrementing = false;


    ## table relationships ##
    public function province(){
        return $this->belongsTo(Province::class);
    }

    // public function branches(){
    //     return $this->hasMany(Branch::class);
    // }

    // public function d_fee(){
    //     return $this->hasOne(DistrictFee::class);
    // }
}
