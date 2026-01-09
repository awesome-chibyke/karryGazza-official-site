<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Mail\MessageFromContactForm;
use App\Models\About;
use App\Models\Category;
use App\Models\Faqs;
use App\Models\News;
use App\Models\Service;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public $slider;
    public $about;
    public $service;
    public $product_Table;
    public $product_Detail;
    public $testimony;
    public $partners;
    public $settings;
    public $news;
    public $arrayForView;
    public $faqs;
    public $category;

    function __construct(Slider $slider, About $about, Service $service, Category $category, Testimony $testimony, Settings $settings, News $news, Faqs $faqs){

        $this->slider = $slider;
        $this->about = $about;
        $this->service = $service;
        $this->testimony = $testimony;
        $this->settings = $settings;
        $this->news = $news;
        $this->faqs = $faqs;
        $this->category = $category;

        $settings = $this->settings::first();
        $this->arrayForView = ['settings'=>$settings];

    }

    public function index(){

        $sliders = $this->slider::orderBy('id', 'desc')->get();
        $about = $this->about::first();
        $services = $this->service::orderBy('id', 'desc')->limit(6)->get();
        $testimonies = $this->testimony::where([
            ['status', '=', 'Approved']
        ])->orderBy('id', 'desc')->get();
        $viewAlNews = $this->news::orderBy('id', 'desc')->simplePaginate(20);
        $tags = $this->news::orderBy('id', 'desc')->get();
        $faqs = $this->faqs::orderBy('id', 'desc')->get();
        $category = $this->category::orderBy('id', 'desc')->get();

        $data = array_merge($this->arrayForView,  [
            'sliders'=>$sliders,
            'about'=>$about,
            'services'=>$services,
            'testimonies'=>$testimonies,
            'viewAlNews'=>$viewAlNews,
            'tags'=>$tags,
            'faqs'=>$faqs,
            'categories'=>$category,
        ]);

        return view('layouts.main_front', $data);
    }
    
    public function dashboard(){

        $sliders = $this->slider::orderBy('id', 'desc')->get();
        $about = $this->about::first();
        $services = $this->service::orderBy('id', 'desc')->limit(6)->get();
        $testimonies = $this->testimony::where([
            ['status', '=', 'Approved']
        ])->orderBy('id', 'desc')->get();
        $viewAlNews = $this->news::orderBy('id', 'desc')->simplePaginate(20);
        $tags = $this->news::orderBy('id', 'desc')->get();
        $faqs = $this->faqs::orderBy('id', 'desc')->get();
        $category = $this->category::orderBy('id', 'desc')->get();

        $data = array_merge($this->arrayForView,  [
            'sliders'=>$sliders,
            'about'=>$about,
            'services'=>$services,
            'testimonies'=>$testimonies,
            'viewAlNews'=>$viewAlNews,
            'tags'=>$tags,
            'faqs'=>$faqs,
            'categories'=>$category,
        ]);

        return view('logged.dashboard', $data);
    }

    public function viewSingleNews($uniqueId){
        $singleNews = $this->news::where([
            ['unique_id', '=', $uniqueId]
        ])->first();
        $latestNews = $this->news::orderBy('id', 'desc')->limit(5)->get();

        if($singleNews === null){
            return redirect::back('/');
        }else{
            $singleNews->user;
            return view('layouts.single_news', ['singleNews'=>$singleNews, 'latestNews'=>$latestNews]);
        }

    }

    public function termAndConditions(){

        return view('layouts.terms');

    }
    
    public function privacyPolicyBlade(){

        return view('layouts.policy');

    }
    
    public function refundPolicyBlade(){

        return view('layouts.refund-policy');

    }

    function sendMessage(Request $request){

        try{
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string',
                'content' => 'required|string'
            ]);

            // send mail
            $settingsObject = $this->settings::first();
            $settingsObject['content'] = $request->content;
            $settingsObject['subject'] = $request->subject;
            $settingsObject['name'] = $request->name;
            $settingsObject['user_email'] = $request->email;
            Mail::to($settingsObject->email1)->send(new MessageFromContactForm($settingsObject));
                //return the user to the front end
            return Redirect::back()->with('status', 'Message was successfully sent');
        }catch(\Exception $exception){

            $errorMessage = $exception->getMessage();
            return Redirect::back()->with('error', $errorMessage);
        }

    }

    public function blog_()
    {
        $viewAlNews = $this->news::orderBy('id', 'desc')->simplePaginate(20);
        $tags = $this->news::orderBy('id', 'desc')->get();
        $latestNews = $this->news::orderBy('id', 'desc')->limit(5)->get();

        $data = array_merge($this->arrayForView,  [
            'viewAlNews'=>$viewAlNews,
            'tags'=>$tags,
            'latestNews'=>$latestNews
        ]);

        return view('layouts.blog', $data);
    }
}
