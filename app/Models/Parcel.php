<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'biker_id',
        'status_id',
        'pick_up_address',
        'drop_off_address',
        'pick_up_at',
        'drop_off_at'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function biker()
    {
        return $this->belongsTo(Biker::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
