<?php

namespace App\Traits;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

trait ServiceTrait{



    function returnIcons(){

        return [
            'bi-binoculars',
            'bi-briefcase',
            'bi-card-checklist',
            'bi-bar-chart',
            'bi-brightness-high',
            'bi-calendar4-week'
            ];

    }


}


?>
