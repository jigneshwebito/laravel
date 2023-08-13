<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurEvent extends Model
{
    use HasFactory;
    protected $table = 'our_event';
    protected $fillable = ['name', 'image'];
}
