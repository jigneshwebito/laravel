<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp_skill extends Model
{
    protected $table = "emp_skill";
    protected $fillable = ['technical_skill', 'personal_attribute', 'professional_detail', 'work_areas', 'dislike_current_company', 'describe_co_workers', 'change_company_reason', 'night_sheeft', 'family_background'];
}
