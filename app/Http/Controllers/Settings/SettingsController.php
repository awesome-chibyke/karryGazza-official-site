<?php

namespace App\Http\Controllers\Settings;

use App\Models\Category;
use App\Models\Settings;
use App\Traits\Generics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{

    public $settings;
    public $category;
    
    function __construct(Settings $setting, Category $category){
        $this->settings = $setting;
        $this->category = $category;
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Generics;
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settingsDetals = $this->settings::first();
        $category = $this->category::orderBy('id', 'desc')->get();
        //print_r($settingsDetals); die();
        return view('/user.settingsDashboard', ['settings_details'=> $settingsDetals, 'categories'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name'=>'max:500',
            'email1' => 'max:500',
            'email2' => 'max:500',
            'phone1' => 'max:500',
            'phone2' => 'max:500',
            'address1' => 'max:500',
            'address2' => 'max:500',
            'linkedin' => 'max:500',
            'twitter' => 'max:500',
            'facebook' => 'max:500',
            'instagram' => 'max:500',
            'slogan' => 'max:500',
        ]);

        $app_settings = $this->settings::where([
            ['unique_id', '=', $request->unique_id]
        ])->first();


        if($app_settings === null){
            return Redirect::back()->with('error','Settings page could not be updated');

        }

        $app_settings->unique_id = $request->input('unique_id');
        $app_settings->company_name = $request->input('company_name');
        $app_settings->email1 = $request->input('email1');
        $app_settings->email2 = $request->input('email2');
        $app_settings->phone1 = $request->input('phone1');
        $app_settings->phone2 = $request->input('phone2');
        $app_settings->address1 = $request->input('address1');
        $app_settings->address2 = $request->input('address2');
        $app_settings->linkedin = $request->input('linkedin');
        $app_settings->twitter = $request->input('twitter');
        $app_settings->facebook = $request->input('facebook');
        $app_settings->instagram = $request->input('instagram');
        $app_settings->slogan = $request->input('slogan');

        $app_settings->save();

        return Redirect::back()->with('status', 'Settings was successfully Upated!');

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
}
