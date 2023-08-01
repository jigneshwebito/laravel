<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSlider extends Model
{
    use HasFactory;
    protected $table = 'work_slider';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'review', 'year', 'image'];
}
