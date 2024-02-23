<?php

namespace App\Models;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Creagia\LaravelSignPad\Contracts\CanBeSigned;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Authenticatable    
{
    use HasRoles, HasFactory, Notifiable, SoftDeletes;

    
  protected $primaryKey = 'id'; // Specify the primary key
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the primary key type
     protected $fillable = [
        'firstname',
        'lastname',
        'email',       
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

