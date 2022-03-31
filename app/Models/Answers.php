<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Answers extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $primaryKey = 'answer_id';
    public $timestamps=false;
    protected $fillable = [
        'question_id','user_id','answer_text'
    ];

    function user_detail() {
        return $this->belongsTo(UserDetail::class,'user_id','id');
    }
    function questions() {
        return $this->belongsTo(Questions::class,'question_id')->join('question_category','question_category.category_id','=','questions.category_id');
    }
}
