<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captions extends Model
{
    use HasFactory;

    protected $table = 'captions';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'desc',
        'photo_id',
        'author_id',
        'link'
    ];

    public function photos(){
        return $this->hasOne(Photos::class,'id','photo_id');
    }
}
