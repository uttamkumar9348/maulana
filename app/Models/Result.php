<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable=[
      'user_id',
      'quiz_id',
      'quiz_score',
      'achieved_score'
    ];
use Carbon\Carbon;

protected $dates = ['created_at','updated_at'];

protected function serializeDate(DateTimeInterface $dates)
{
    return Carbon::createFromFormat('Y-m-d H:i:s', $dates)->diffForHumans();

    public function quiz(){
        $this->belongsTo(Quiz::class);
    }

    public function user(){
        $this->belongsToMany(User::class);
    }
    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }
}
