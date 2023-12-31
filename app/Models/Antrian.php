<?php

namespace App\Models;

use App\Models\User;
use App\Models\Poli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'poli_id', 'id');
    }
    protected $dispatchesEvents = [
        'saving' => \App\Events\AntrianSaving::class,
    ];
}


 