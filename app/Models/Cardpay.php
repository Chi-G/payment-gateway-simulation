<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;


class Cardpay extends Model
{
    use HasFactory;

    protected $table = 'card_pay';

    public function storecard(Request $request)
    {
        $validated = $request->validate([
            'card_name' => 'required|max:25',
            'card_number' => 'required|max:16',
            'expiration_date' => 'required|max:4',
            'cvv' => 'required|max:3',
            'pin' => 'required|max:3',
        ]);

        return $this->hasOne('App\Models\User', 'card_name', 'steam_id');
    }
    protected $fillable = [
        'card_name',
        'card_number',
        'expiration_date',
        'cvv',
        'pin'
    ];

}
