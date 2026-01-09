<?php

namespace App\Http\Controllers\Sliders;

use App\Models\Slider;
use App\Traits\Generics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    use Generics;

    public $slider;
    public $category;

    function __construct(Slider $slider, Category $category){

        $this->slider = $slider;

        $this->category = $category::orderBy('id', 'desc')->get();
    }
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSlider = $this->slider::orderBy('id', 'desc')->get();
        return view('logged.all_sliders', ['all_sliders'=>$allSlider, 'categories'=>$this->category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.create_slider', ['categories'=>$this->category]);
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
            'title' => 'required|max:500',
            'description' => 'required|max:500',
            'photo' => 'required|max:5000',
        ]);

        if($request->hasFile('photo')){

            //get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();

            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload image
            $path = $request->file('photo')->storeAs($this->slider->sliderImagePath, $fileNameToStore, 'public');

        }else{
            $fileNameToStore = $this->slider->defaultImageName;
        }

        //unique_id,title,description,photo
        $unique_id = $this->createNewUniqueId('sliders', 'unique_id');

        $addCategory = new Slider();
        $addCategory->unique_id = $unique_id;
        $addCategory->title = $request->input('title');
        $addCategory->description = $request->input('description');
        $addCategory->photo = $fileNameToStore;
        $addCategory->save();

        return Redirect::back()->with('status', 'Slider created successfully!');
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
    public function edit($sliderUniqueId)
    {
        $sliderDetails = $this->slider::where([
            ['unique_id', '=', $sliderUniqueId]
        ])->first();

        return view('logged.edit_slider', ['slider_detail'=>$sliderDetails, 'categories'=>$this->category]);

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

        try{

            $this->validate($request, [

            ]);

            $validator = Validator::make($request->all(), [
                'title' => 'required|max:500',
                'description' => 'required|max:500',
                //'photo' => 'required|max:500',
            ]);

            if($validator->fails()){
                $message = $validator->getMessageBag();

                return Redirect::back()->with('error_message', $message);
            }

            //get the slider to be updatedList
            $sliderDetail = $this->slider::where([
                ['unique_id', '=', $id]
            ])->first();

            if($sliderDetail === null){
                //return Redirect::back()->with('error', 'Selected Data does not exists');
                throw new \Exception('Selected Data does not exists');
            }

            if(!empty($request->file('photo'))){

                if($request->hasFile('photo')){

                    if ($sliderDetail->image !== $this->slider->defaultImageName) {
                        if(file_exists(storage_path('app/'.$this->slider->sliderImagePath) . $sliderDetail->photo)){
                            $file_old = storage_path('app/'.$this->slider->sliderImagePath) . $sliderDetail->photo;
                            unlink($file_old);
                        }
                    }

                    //get filename with the extension
                    $filenameWithExt = $request->file('photo')->getClientOriginalName();

                    //get just file name
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                    //get just extension
                    $extension = $request->file('photo')->getClientOriginalExtension();

                    //file name to store
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;

                    //upload image
                    $path = $request->file('photo')->storeAs($this->slider->sliderImagePath, $fileNameToStore, 'public');

                    $sliderDetail->photo = $fileNameToStore;//attach the ilname the object to be sent to the db

                }

            }

            $sliderDetail->title = $request->input('title');
            $sliderDetail->description = $request->input('description');
            if(!empty($request->file('photo'))){
                $sliderDetail->photo = $fileNameToStore;
            }
            if($sliderDetail->save()){
                return Redirect::back()->with('status', 'Update was successful!');
            }else{
                throw new \Exception('Update failed');
            }

        }catch(\Exception $exception){

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try{

            $sliderDetail = $this->slider::where([
                ['unique_id', '=', $id]
            ])->first();

            if($sliderDetail === null){
                //return Redirect::back()->with('error', 'Selected Data does not exists');
                throw new \Exception('Selected Data does not exists');
            }

            //delete the image for the slider
            if ($sliderDetail->image !== $this->slider->defaultImageName) {
                if(file_exists(storage_path('app/'.$this->slider->sliderImagePath) . $sliderDetail->photo)){
                    $file_old = storage_path('app/'.$this->slider->sliderImagePath) . $sliderDetail->photo;
                    unlink($file_old);
                }
            }

            //delete the slider it self
            if($sliderDetail->delete()){
                return Redirect::back()->with('status', 'Data was successfully deleted');
            }else{
                throw new \Exception('Data could not be deleted');
            }

        }catch(\Exception $exception){

            $errorMessage = $exception->getMessage();
            return Redirect::back()->with('error', $errorMessage);

        }


    }

}