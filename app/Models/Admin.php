<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'steam_name',
        'real_name',
        'social_media',
        'photo_id',
        'author_id',
        'role'
    ];

    public function photos(){
        return $this->hasOne(Photos::class,'id','photo_id');
    }
}
