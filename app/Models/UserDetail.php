<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserDetail extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $primaryKey = 'id';    
    protected $table = 'personal_detail';    
    public $timestamps=false;
    protected $fillable = [
            'id','name','guardian_name','birth_date','gender','contact_no','email_id','address'
    ];
    function getAnswers() {
        return $this->hasMany(Answers::class,'user_id');
    }
    function getConfiguration() {
        
    }
}
