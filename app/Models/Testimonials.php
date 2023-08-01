<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $fillable = ['images_path', 'name', 'description', 'isDeleted', 'isHide'];
}
