<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Settings extends Model
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
        'company_name',
        'email1',
        'email2',
        'phone1',
        'phone2',
        'address1',
        'address2',
        'linkedin',
        'twitter',
        'facebook',
        'instagram',
        'slogan',

    ];use HasFactory;
}
