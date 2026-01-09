<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'unique_id',
        'title',
        'image',
        'post',
    ];

    public function tagForNews(){
        return $this->hasMany(NewsTag::class, 'news_unique_id');   
    }

    public function user(){
        return $this->belongsTo(User::class, 'author');   
    }
}
