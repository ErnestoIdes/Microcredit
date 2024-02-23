<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'documents';

    //Primary Key
    public $primaryKey = 'id';

    //Time Stamps
    public $timestamps = 'true';
    
    protected $fillable = [
        'user_id',
        'name',
        'document_type_id'     
       ];
    
    # Disable auto increment
    // public $incrementing = false;


    ## table relationships ##
    // public function country(){
    //     return $this->belongsTo(Country::class);
    // }

   
}
