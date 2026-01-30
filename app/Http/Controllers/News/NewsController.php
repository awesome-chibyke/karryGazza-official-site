<?php

namespace App\Http\Controllers\News;

use App\Models\News;
use App\Models\NewsTag;
use App\Models\Category;
use App\Traits\Generics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{

    use Generics;
    public $news;
    public $newsTag;
    public $category;

    function __construct(News $news, NewsTag $newsTag, Category $category){
        // $this->middleware('auth');
        $this->news = $news;
        $this->newsTag = $newsTag;
        $this->category = $category;
    }
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNews = $this->news::orderBy('id', 'desc')->get();
        $category = $this->category::orderBy('id', 'desc')->get();
        return view('/logged.news', ['allNews'=> $allNews, 'categories'=>$category]);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->category::orderBy('id', 'desc')->get();
        return view('/logged.create_news', ['categories'=>$category]);
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
            'title' => 'max:500',
            'image'=> 'image|nullable|max:1999',
            'post' => 'min:100',

        ]);

        if($request->hasFile('image')){
         //get filename with the extension
         $filenameWithExt = $request->file('image')->getClientOriginalName();

         //get just file name
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

         //get just extension
         $extension = $request->file('image')->getClientOriginalExtension();

         //file name to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;

         //upload image
         $path = $request->file('image')->storeAs('images', $fileNameToStore, "public");

     }else{

         $fileNameToStore = $this->news->defaultImageName;
     }


        $unique_id = $this->createNewUniqueId('news', 'unique_id');
        
        $newNews = new News;
        $newNews->unique_id = $unique_id;
        $newNews->title = $request->input('title');
        $newNews->post = $request->input('post');
        $newNews->image = $fileNameToStore;
        if(env('APP_ENV') === "production"){
            $newNews->tags = '';
        }
        $newNews->author_name = Auth::user()->id;
        $newNews->save();

        if($newNews){
            if(!empty($request->tag)){
                $newsTagArray = explode(',', $request->tag);
           
                if(count($newsTagArray) > 0){
                    foreach ($newsTagArray as $k => $eachTag){
                        $request->news_unique_id = $unique_id;
                        $request->tag = $eachTag;
                        $this->newsTag->createTagForNews($request);
                    }
                }
            }
        }

        return redirect('/all_news')->with('status', 'news Created!');
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
    $category = $this->category::orderBy('id', 'desc')->get();
        $newsToEdit = $this->news::where([
            ['unique_id', '=', $id]
        ])->first();
        if($newsToEdit === null){
            return redirect('/all_news')->with('status', 'News could not be Edited!');
        }else{
            $tagArray = [];
            $tagForNews = $newsToEdit->tagForNews;
            if(count($tagForNews) > 0){
                foreach($tagForNews as $k => $eachTag){
                    $tagArray[] = $eachTag->tag;
                }
            }

            $newsToEdit->tags = $tagArray;
            return view('/logged.edit_news', ['newsToEdit' => $newsToEdit, 'categories'=>$category]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'max:500',
            'image'=> 'image|nullable|max:1999',
            'post' => 'max:500000',

        ]);

        
        $updatedNews = $this->news::where([
            ['unique_id', '=', $request->unique_id]
        ])->first();

        

        $hasfile = 'no';
        if($request->hasFile('image')){

            $hasfile = "yes";
            
            if ($updatedNews->image !== $this->news->defaultImageName) {
                if(file_exists(storage_path('app/public/images/') . $updatedNews->image)){
                    $file_old = storage_path('app/public/images/') . $updatedNews->image;
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
         $path = $request->file('image')->storeAs('images', $fileNameToStore, "public");

     }else{

         $fileNameToStore = $this->news->defaultImageName;
     }

     
        $updatedNews->title = $request->input('title');
        $updatedNews->post = $request->input('post');
        if($hasfile === "yes"){
            $updatedNews->image = $fileNameToStore;
        }
        $updatedNews->save();

        if($request->tag){

            if(!empty($request->tag)){

                $newsTagArray = explode(',', $request->tag);
                if(count($newsTagArray) > 0){

                    //delete the existing tags
                    $tagForNews = $updatedNews->tagForNews;
                    if(count($tagForNews) > 0){
                        foreach ($tagForNews as $k => $eachTag){
                            $eachTag->delete();
                        }
                    }

                    foreach ($newsTagArray as $k => $eachNewTag){
                        $request->news_unique_id = $updatedNews->unique_id;
                        $request->tag = $eachNewTag;
                        $this->newsTag->createTagForNews($request);
                    }

                }

            }

        }

        return redirect('/all_news')->with('status', 'news Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsToDelete = $this->news::where([
            ['unique_id', '=', $id]
        ])->first();

        if($newsToDelete !== null){
            $newsToDelete->delete();
            return redirect('/all_news')->with('status', 'news deleted!');

        }else{
            return redirect('/all_news')->with('status', 'news could not be deleted!');
        }
    }

    

}
