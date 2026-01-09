<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Generics;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsTag extends Model
{
    use HasFactory, Generics, SoftDeletes;
    protected $primaryKey = 'unique_id';
    public $incrementing = false;



    public function newsToTag(){
        return $this->belongsTo(News::class, 'news_user_id');   
    }

    public function careerToTag(){
        return $this->belongsTo(Availablecareer::class, 'availablecareers_user_id');
    }
  
    function createTagForNews($request){
        
        $newsTag = new NewsTag();
        $newsTag->unique_id = $this->createNewUniqueId('news_tags', 'unique_id');
        $newsTag->news_unique_id = $request->news_unique_id;
        $newsTag->tag = $request->tag;
        $newsTag->save();
        return $newsTag;
    }


    function createTagForAvailableCareer($request){
        $AvaialableCareerTag = new NewsTag();
        $AvaialableCareerTag->unique_id = $this->createNewUniqueId('news_tags', 'unique_id');
        $AvaialableCareerTag->news_unique_id = $request->news_unique_id;
        $AvaialableCareerTag->tag = $request->tag;
        $AvaialableCareerTag->save();
        return $AvaialableCareerTag;
    }
}
