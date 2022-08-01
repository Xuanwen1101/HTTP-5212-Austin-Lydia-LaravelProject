<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'date',
        'content',
        'slug',
        'image',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
