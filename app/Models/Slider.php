<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory, SoftDeletes;


    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $defaultImageName = 'slide-1.jpg';
    public $sliderImagePath = 'public/sliders';//slider image path

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'unique_id',
        'title',
        'description',
        'photo',
    ];
}