<?php

namespace App\Models;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\PaymentG as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Request;

class PaymentG extends Model 
{
    use HasFactory;

    protected $table = 'payment_g_s';
    
    protected $fillable = [
        'card_name',
        'amount',
        'email',
        'cvv',
        'pin',
        'card_number',
    ];

   
}
