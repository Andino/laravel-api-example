<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'name',
        'card_brand',
        'card_last_four',
        'auth_code',
        'verified',
        'default',
        'user_id',
    ];

    /**
     * Get the users that owns the payment method.
    */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
