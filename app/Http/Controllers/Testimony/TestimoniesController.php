<?php

namespace App\Http\Controllers\Testimony;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimony;
use App\Traits\Generics;
use Illuminate\Support\Facades\Redirect;


class TestimoniesController extends Controller
{
    public $testimony;
    
    function __construct(Testimony $testimony){
        $this->testimony = $testimony;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Generics;
    public function index()
    {
        $all_testimonies = $this->testimony::orderBy('id', 'desc')->get();
        return view('/user.testimony', ['all_testimonies'=> $all_testimonies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimony = $this->testimony::first();
        return view('/user.create_testimony', ['testtimony'=> $testimony]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'max:500',
            'testimony' => 'max:500',
        ]);

        $unique_id = $this->createNewUniqueId('categories', 'unique_id');

        $create_newTestimony = new $this->testimony;
        $create_newTestimony->unique_id = $unique_id;
        $create_newTestimony->name = $request->input('name');
        $create_newTestimony->testimony = $request->input('testimony');
        $create_newTestimony->save();

        //return redirect('/testimony')->with('status', 'testimony has been submitted');
        return Redirect::back()->with('status', 'testimony has been submitted');
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
    public function destroy($uniqueId)
    {
        $deleteTestimony = $this->testimony::where([
            ['unique_id', '=', $uniqueId]
        ])->first();

        if($deleteTestimony !== null){
            $deleteTestimony->delete();
            return Redirect::back()->with('status', 'testimony deleted!');
        }
    }


    public function approveTestimony($uniqueId){
        $approveTes = $this->testimony::where([
            ['unique_id', '=', $uniqueId]
        ])->first();

        if($approveTes === null){
            return redirect('/testimony');
        }

        $approveTes->status = 'Approved';
        $approveTes->save();
        return redirect('/testimony');
    }
}
