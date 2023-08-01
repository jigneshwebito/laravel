<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article_category extends Model
{
    use HasFactory;
    protected $table = 'article_category';
    protected $primaryKey = 'id';
    protected $fillable = ['category','sub_category','banner_image','active_status'];
}
