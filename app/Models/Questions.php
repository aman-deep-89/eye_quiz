<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Questions extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $primaryKey = 'question_id';
    public $timestamps=false;
    protected $fillable = [
        'question_id','category_id','question_text','rating_max'
    ];

    function category() {
        return $this->belongsTo(Category::class,'category_id');
    }
    function answers() {
        return $this->hasMany(Answers::class,'question_id');
    }
}
