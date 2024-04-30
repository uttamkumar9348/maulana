<?php

namespace App\Models;

use App\Models\Web\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntranceFee extends Model
{
    use HasFactory;

    protected $fillable = ['course_id','exam_fee'];
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
