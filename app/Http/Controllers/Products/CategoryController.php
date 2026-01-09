<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\Generics;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    public $category;

    function __construct(Category $category){
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
        $category = $this->category::orderBy('id', 'desc')->get();
        return view('/user.category' , ['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.categorydashboard');
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

            'category_name' => 'required',
            //'description' => 'max:500',

        ]);

        $unique_id = $this->createNewUniqueId('categories', 'unique_id');

        $addCategory = new Category;
        $addCategory->unique_id = $unique_id;
        $addCategory->category_name = $request->input('category_name');
        $addCategory->description = strlen( $request->input('description') ) > 0 ? $request->input('description') : '';
        $addCategory->save();

        return Redirect::back()->with('status', 'Category created successfully!');
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
    public function edit($unique_id)
    {

       $editCategory = $this->category::where([
           ['unique_id', '=', $unique_id]
       ])->first();
       return view('/user.edit_category', ['edit_category'=>$editCategory]);

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

            'category_name' => 'required',
            'description' => 'max:500',

        ]);



       
        // $updateCategory = Category::find($id);
        $updateCategory = $this->category::where([
            ['unique_id', '=', $request->unique_id]
        ])->first();
        $updateCategory->category_name = $request->input('category_name');
        $updateCategory->description = $request->input('description');
        $updateCategory->save();

        return Redirect::back()->with('status', 'Category created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uniqueId)
    {
        $deleteCategory = $this->category::where([
            ['unique_id', '=', $uniqueId]
        ])->first();

        if($deleteCategory !== null){
            $deleteCategory->delete();

            return redirect('/category')->with('status', 'Category deleted!');
        }
    }
}