<?php

namespace App\Http\Controllers\FrontPages;

use App\Models\News;
use App\Models\About;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Settings;
use App\Traits\Generics;
use App\Models\Testimony;
use Illuminate\Http\Request;
use App\Models\Product_Table;
use App\Models\Product_Detail;
use App\Http\Controllers\Controller;
use App\Mail\MessageFromContactForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FrontPagesController extends Controller
{
    use Generics;

    public $slider;
    public $about;
    public $category;
    public $service;
    public $product_Table;
    public $product_Detail;
    public $testimony;
    public $partners;
    public $settings;
    public $news;
    public $arrayForView;

    function __construct(Slider $slider, About $about, Service $service, Category $category, Product_Table $product_Table, Product_Detail $product_Detail, Testimony $testimony, Partners $partners, Settings $settings, News $news){

        $this->slider = $slider;
        $this->about = $about;
        $this->category = $category;
        $this->service = $service;
        $this->product_Table = $product_Table;
        $this->product_Detail = $product_Detail;
        $this->testimony = $testimony;
        $this->partners = $partners;
        $this->settings = $settings;
        $this->news = $news;

        $settings = $this->settings::first();
        $this->arrayForView = ['settings'=>$settings];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get the Sliders
        $sliders = $this->slider::orderBy('id', 'desc')->get();
        $about = $this->about::first();
        $services = $this->service::orderBy('id', 'desc')->limit(6)->get();
        $category = $this->category::orderBy('id', 'desc')->get();
        $products = $this->product_Table::orderBy('id', 'desc')->limit(6)->get();
        $testimonies = $this->testimony::where([
            ['status', '=', 'Approved']
        ])->orderBy('id', 'desc')->get();
        $partners = $this->partners::orderBy('id', 'desc')->get();

        $data = array_merge($this->arrayForView,  [
                'sliders'=>$sliders,
                'about'=>$about,
                'services'=>$services,
                'categories'=>$category,
                'products'=>$products,
                'testimonies'=>$testimonies,
                'partners'=>$partners
        ]);

        return view('user.home', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //get the poduct Details
    public function productDetails($uniqueId){

        $category = $this->category::orderBy('id', 'desc')->get();
        $singleProduct = $this->product_Table::where([
            ['unique_id', '=', $uniqueId]
        ])->first();

        $data = array_merge($this->arrayForView,  ['single_product'=>$singleProduct, 'categories'=>$category]);

        return view('user.product_details', $data);

    }

    function about(){

        $about = $this->about::first();
        $partners = $this->partners::orderBy('id', 'desc')->get();
        $category = $this->category::orderBy('id', 'desc')->get();

        $data = array_merge($this->arrayForView,  ['about'=>$about, 'categories'=>$category, 'partners'=>$partners]);

        return view('user.about', $data);
    }

    function blog(){

        $viewAlNews = $this->news::orderBy('id', 'desc')->simplePaginate(20);
        $category = $this->category::orderBy('id', 'desc')->get();
        $tags = $this->news::orderBy('id', 'desc')->get();
        $latestNews = $this->news::orderBy('id', 'desc')->limit(5)->get();
        return view('layouts.blog', ['viewAlNews'=> $viewAlNews, 'categories'=>$category, 'news_tags'=> $tags, "latestNews"=>$latestNews]);
    }

    function contact(){

        $settings = $this->settings::first();
        $category = $this->category::orderBy('id', 'desc')->get();

        $data = array_merge($this->arrayForView,  ['settings'=>$settings, 'categories'=>$category,]);

        return view('user.contact', $data);
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

    function products(){
        $category = $this->category::orderBy('id', 'desc')->get();
        $products = $this->product_Table::orderBy('id', 'desc')->simplePaginate(20);
        return view('user.products', ['products'=>$products, 'categories'=>$category]);
    }

    public function viewNews()
    {
        $category = $this->category::orderBy('id', 'desc')->get();
        $viewAlNews = $this->news::orderBy('id', 'desc')->simplePaginate(20);
        $tags = $this->news::orderBy('id', 'desc')->get();
        return view('user.viewNews', ['viewAlNews'=> $viewAlNews, 'news_tags'=> $tags, 'categories'=>$category]);
    }



    public function viewSingleNews($uniqueId){
        $category = $this->category::orderBy('id', 'desc')->get();
        $singleNews = $this->news::where([
            ['unique_id', '=', $uniqueId]
        ])->first();
        $latestNews = $this->news::orderBy('id', 'desc')->limit(5)->get();

        if($singleNews === null){
            return redirect::back('user.viewNews',);
        }else{
            return view('layouts.single_news', ['singleNews'=>$singleNews, 'latestNews'=>$latestNews, 'categories'=>$category]);
        }

    }

}
