<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'caption',
        'gamemodes',
        'types',
        'author_id',
        'file_path'
    ];

    public function Captions()
    {
        return $this->belongsTo(Captions::class,'photo_id','id');
    }
    public function Admin()
    {
        return $this->belongsTo(Admin::class,'photo_id','id');
    }
}
