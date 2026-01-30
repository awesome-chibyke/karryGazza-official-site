<?php

namespace App\Http\Controllers\Partners;

use App\Models\Category;
use App\Models\Partners;
use App\Traits\Generics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PartnersController extends Controller
{
    use Generics;

    public $partners;
    public $category;

    function __construct(Partners $partners, Category $category){
        $this->partners = $partners;

        $this->category = $category::orderBy('id', 'desc')->get();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_partners = $this->partners::orderBy('id', 'desc')->get();
        return view('/user.partners', ['business_partners'=>$business_partners, 'categories'=>$this->category]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/user.create_partner', ['categories'=>$this->category]);
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
            'image'=> 'image|nullable|max:1999',
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
         $path = $request->file('image')->storeAs('public/images', $fileNameToStore, 'public');

     }else{

         $fileNameToStore = $this->about->defaultImageName;
     }


        $unique_id = $this->createNewUniqueId('categories', 'unique_id');

        
        $newPartner = new Partners;
        $newPartner->unique_id = $unique_id;
        $newPartner->image = $fileNameToStore;
        $newPartner->save();

        return redirect('/partners')->with('status', 'Partner Created!');
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
    public function edit($uniqueId)
    {
        $editPartner = $this->partners::where([
            ['unique_id', '=', $uniqueId]
        ])->first();
        return view('/user.edit_partner', ['editPartner'=>$editPartner, 'categories'=>$this->category]);
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
            'image'=> 'image|nullable|max:1999',
        ]);

        $upDatedPartner = $this->partners::where([
            ['unique_id', '=', $request->unique_id]
        ])->first();

        if($request->hasFile('image')){

            if ($upDatedPartner->image !== $this->partners->defaultImageName) {
                if(file_exists(storage_path('app/public/images/') . $upDatedPartner->image)){
                    $file_old = storage_path('app/public/images/') . $upDatedPartner->image;
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


        
        $upDatedPartner->image = $fileNameToStore;
        $upDatedPartner->save();

        return redirect('/partners')->with('status', 'Partner Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uniqueId)
    {
        $deletePartner = $this->partners::where([
            ['unique_id', '=', $uniqueId]
        ])->first();

        if($deletePartner !== null){
            $deletePartner->delete();

            return redirect('/partners')->with('status', 'Partner deleted!');
        }

    }
}
