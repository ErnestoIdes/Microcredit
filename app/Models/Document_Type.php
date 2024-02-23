<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document_Type extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'document_type';

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
