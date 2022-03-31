<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Category extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $primaryKey = 'category_id';    
    protected $table = 'question_category';    
    public $timestamps=false;
    protected $fillable = [
            'category_id','title','btn_name'
    ];
    function getQuestions() {
        return $this->hasMany(Questions::class,'category_id');
    }
}
