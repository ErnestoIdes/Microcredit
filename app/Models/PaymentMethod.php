<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'payment_method';

    //Primary Key
    public $primaryKey = 'id';

    //Time Stamps
    public $timestamps = 'true';

    # Disable auto increment
    // public $incrementing = false;


    ## table relationships ##
    // public function country(){
    //     return $this->belongsTo(Country::class);
    // }

   
}
