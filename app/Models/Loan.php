<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loans';
    protected $primaryKey = 'id';

     protected $fillable = [
        'loan_code',
        'state',
        'rate',
        'amount',
        'amount_to_pay',
        'due_date',
        'created_by_id'
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
