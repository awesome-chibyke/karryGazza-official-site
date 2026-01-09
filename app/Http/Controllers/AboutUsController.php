<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Traits\Generics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class AboutUsController extends Controller
{
    public $about;
    public $category;
    function __construct(About $about, Category $category){
        $this->about = $about;
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
        return view('/about');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aboutDetails = $this->about::first();
        $category = $this->category::orderBy('id', 'desc')->get();
        return view('user.aboutDashboard', ['about_details'=>$aboutDetails, 'categories'=>$category]);
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

            'title' => 'required',
            'description' => 'max:1000000',
            'image' => 'image|nullable|max:1999',
            'vision' => 'max:3000',
            'mission' => 'max:3000',
        ]);

        $about_us = $this->about::where([
            ['unique_id', '=', $request->unique_id]
        ])->first();

        if($about_us === null){
            return Redirect::back()->with('error','About page could not be updated');

        }

        if($request->hasFile('image')){

            if ($about_us->image !== $this->about->defaultImageName) {
                if(file_exists(storage_path('app/public/images/') . $about_us->image)){
                    $file_old = storage_path('app/public/images/') . $about_us->image;
                    unlink($file_old);
                }
            }

            //get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore, 'public');

        }else{
            $fileNameToStore = $this->about->defaultImageName;
        }


        //create post
        $about_us ->unique_id = $request->input('unique_id');
        $about_us->title = $request->input('title');
        $about_us->description = $request->input('description');
        $about_us->image =  $fileNameToStore;
        $about_us->vision = $request->input('vision');
        $about_us->mission = $request->input('mission');
        $about_us->save();

        return Redirect::back()->with('status', 'About Page has been updated successfully!');
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
