<?php

namespace App\Models;

use App\Traits\Generics;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Faqs\FaqsController;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faqs extends Model
{
    use HasFactory, SoftDeletes, Generics;

    //primary key
    protected $primaryKey = 'unique_id';
    public $incrementing = false;

    function createNewFaqs($request){
        $Faqs = new Faqs();
        $Faqs->unique_id = Str::uuid();
        $Faqs->question = $request->question;
        $Faqs->answer = $request->answers;
        $Faqs->save();
        return $Faqs;
    }

    function updateFaqs($request){
        $Faqs = Faqs::find($request->unique_id);
        $Faqs->question = $request->question ?? $Faqs->question;
        $Faqs->answer = $request->answer ?? $Faqs->answer;
        $Faqs->save();
        return $Faqs;
    }

    function getSingleRow($uniqueId){

        return Faqs::find($uniqueId);

    }

    function getAllRows($orderColumn = 'created_at', $orderType = 'desc'){

        return Faqs::orderBy($orderColumn, $orderType)->get();

    }

}
