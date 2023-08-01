<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_info extends Model
{
    protected $table = "personal_info";
    protected $fillable = ['position_applied', 'u_name', '	u_age', 'u_gender', 'u_location', 'u_number', 'u_gmail', 'u_qualification', 'ssc', 'hsc', 'graducation', 'pg_diploma', 'other_graducation	', 'experience_year', 'present_salary', 'type_e_seeking', 'resume'];
}
