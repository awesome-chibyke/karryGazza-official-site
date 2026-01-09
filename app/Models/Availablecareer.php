<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Availablecareer extends Model
{
    use HasFactory;


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
        'position',
        'salary',
        'closing_date',
        'location',
        'job_description',

    ];

    public function tagsForAvailableCareers(){
        return $this->hasMany(NewsTag::class, 'availablecareers_unique_id');
    }

}
