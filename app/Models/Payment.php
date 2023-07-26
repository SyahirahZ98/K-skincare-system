<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'payment';

    protected $fillable =[
        'firstname','lastname','email','address','city','code','notes','image'
    ];
}
