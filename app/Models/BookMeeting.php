<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BookMeeting extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "meeting_bookings";
    protected $fillable = [
        'first_name', 'last_name', 'email',
        'date', 'time_slot', 'assign_to',
    ];
}
