<?php

namespace App\Http\Controllers\Services;

use App\Models\Service;
use App\Traits\Generics;
use App\Traits\ServiceTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{
    use ServiceTrait, Generics;


    function __construct(Service $service){
        $this->middleware('auth');
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_sevices = $this->service::orderBy('id', 'desc')->get();
        return view('logged.services', ['all_sevices'=>$all_sevices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iconArray = $this->returnIcons();
        return view('user.create_services', ['icon_array'=>$iconArray]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

            $this->validate($request, [
                'title'=> 'required|string',
                'icon'=> 'required|string',
                'description'=> 'required|string',
            ]);

            $unique_id = $this->createNewUniqueId('services', 'unique_id');


            $service = $this->service;
            $service->unique_id = $unique_id;
            $service->title = $request->input('title');
            $service->icon = $request->input('icon');
            $service->description = $request->input('description');

            if($service->save()){
                return redirect('/create_services')->with('status', 'Service was added successfully!');
            }else{
                throw new \Exception('An error occurred, please contact system admin');
            }

        }catch(\Exception $exception){
            $errorMessage = $exception->getMessage();
            return Redirect::back()->with('error', $errorMessage);
        }

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
        $single_service = $this->service::where([
            ['unique_id', '=', $id]
        ])->first();

        $iconArray = $this->returnIcons();

        return view('logged.edit_service', ['single_service'=>$single_service, 'icon_array'=>$iconArray]);
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
                'title'=> 'required|string',
                'icon'=> 'required|string',
                'description'=> 'required|string',
            ]);

            //select the services
            $service = $this->service::where([
                ['unique_id', '=', $id]
            ])->first();

            //check if the service was selected
            if($service === null){
                throw new \Exception('Selected service does not exist');
            }

            $unique_id = $this->createNewUniqueId('services', 'unique_id');

            $service->title = $request->input('title');
            $service->icon = $request->input('icon');
            $service->description = $request->input('description');

            if($service->save()){
                return redirect('/create_services')->with('status', 'Service was updated successfully!');
            }else{
                throw new \Exception('An error occurred, please contact system admin');
            }

        }catch(\Exception $exception){
            $errorMessage = $exception->getMessage();
            return Redirect::back()->with('error', $errorMessage);
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

            //select the services
            $service = $this->service::where([
                ['unique_id', '=', $id]
            ])->first();

            //check if the service was selected
            if($service === null){
                throw new \Exception('Selected service does not exist');
            }

            //delete the service
            if($service->delete()){
                return redirect('/view_services')->with('status', 'Service was deleted successfully!');
            }else{
                throw new \Exception('An error occurred, please contact system admin');
            }

        }catch(\Exception $exception){
            $errorMessage = $exception->getMessage();
            return Redirect::back()->with('error', $errorMessage);
        }
    }
}