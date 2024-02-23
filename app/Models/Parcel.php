<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Parcel extends Model
{
    use HasFactory; 


    protected $table = 'parcels';
    protected $primaryKey = 'id';

     protected $fillable = [
        'loan_id',
        'amount_to_pay',
        'due_date'
    ];
// Override boot method to generate UUID for primary key
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Uuid::uuid4(); // Generate UUID
        });
    } 
}
