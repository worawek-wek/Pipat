<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentList extends Model
{
    // use HasFactory;
    protected $fillable = [
        'title',
    ];

    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $table = 'payment_lists';
    
    public function room_for_rent()
    {
        return $this->hasOne('App\Models\RoomForRents', 'id', 'ref_room_for_rent_id');
    }
}
