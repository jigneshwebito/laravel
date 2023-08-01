<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articals extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title','category','sub_category','banner_image','video_url','tags','s_description','description','date', 'future_date', 'publication_status', 'active_status'];
    
}
