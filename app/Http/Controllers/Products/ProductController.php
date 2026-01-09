<?php

namespace App\Http\Controllers\Products;

use App\Models\Category;
use App\Traits\Generics;
use Illuminate\Http\Request;
use App\Models\Product_Table;
use App\Models\Product_Detail;
use App\Http\Controllers\Controller;
use App\Traits\ProductTraits;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    use Generics, ProductTraits;

    public $product_Table;
    public $product_detail;
    public $category;
    
    function __construct(Product_Table $product_Table, Product_Detail $product_detail, Category $category){

        
        $this->product_Table = $product_Table;
        $this->product_detail = $product_detail;
        $this->category = $category;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = $this->product_Table::orderBy('id', 'desc')->get();
        return view('logged.all_products', ['all_products'=> $allProducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all the available categories
        $allCategory = $this->category::orderBy('id', 'desc')->get();

        //return to view
        return view('logged.add_product', ['all_category'=>$allCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //try{
            //validate the inputs
            $this->validate($request, [

                'category_unique_id' => 'required|string',
                'product_name' => 'required|string|min:3',
                //'product_description' => 'max:1000',
                'price' => 'required|numeric',
                'cancelled_price' => 'required|numeric',
                'discount' => 'required|numeric',
                'thumbnail' => 'required|image|nullable|max:5000',
                'images' => 'array',
                'images.*' => 'image|max:5000',
                'youtube_link' => 'nullable|url'

            ]);

            if(!$request->hasFile('thumbnail')){
                //check for the existence of the thumbnail
                throw new \Exception('Thumbnail is required');
            }

            //create unique id for the product
            $unique_id = $this->createNewUniqueId('product__tables', 'unique_id');

            //upload the thumbnail image
            $thumbnailImageName = $this->uploadThumbnailImage($request, $this->product_Table);

            $addProduct = $this->product_Table;
            $addProduct->unique_id = $unique_id;
            $addProduct->category_unique_id = $request->category_unique_id;
            $addProduct->product_name = $request->input('product_name');
            $addProduct->product_description = strlen($request->input('product_description')) == 0 ? '' : $request->input('product_description');
            $addProduct->price = $request->input('price');
            $addProduct->cancelled_price = $request->input('cancelled_price');
            $addProduct->discount = $request->input('discount');
            $addProduct->youtube_link = strlen($request->input('youtube_link')) == 0 ? null : $request->input('youtube_link');
            $addProduct->thumbnail = $thumbnailImageName;

            if($addProduct->save()){

                //upload more images
                $imageNameArray = $this->uploadMoreImage($request, $this->product_detail);

                $dataSaveStatus = 0;

                //store image names in the db
                if(count($imageNameArray) > 0){

                    for($i = 0; $i < count($imageNameArray); $i++ ){

                        //create unique idd for each product details
                        $product_unique_id = $this->createNewUniqueId('product__details', 'unique_id');

                        $productDetails = new Product_Detail();
                        $productDetails->unique_id = $product_unique_id;
                        $productDetails->product_unique_id = $unique_id;
                        $productDetails->images = $imageNameArray[$i];

                        if($productDetails->save()){
                            $dataSaveStatus++;
                        }
                    }

                }

                if($dataSaveStatus == count($imageNameArray)){
                    return Redirect::back()->with('status', 'Product has been successfully added!');
                }

            }else{
                throw new \Exception('Pruduct could not be created, Please contact system adminstrator');
            }


        // }catch(\Exception $exception){

        //     $errorMessage = $exception->getMessage();
        //     return Redirect::back()->with('error', $errorMessage);

        // }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uniqueId)
    {
        //product category
        $allCategory = $this->category::orderBy('id', 'desc')->get();
        //get all the available categories
        $singleProduct = $this->product_Table::where([
            ['unique_id', $uniqueId]
        ])->first();

        //return to view
        return view('logged.edit_product', ['single_product'=>$singleProduct, 'all_category'=>$allCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productUniqueId)
    {

        try{
            //validate the inputs
            $this->validate($request, [

                'category_unique_id' => 'required|string',
                'product_name' => 'required|string|min:3',
                //'product_description' => 'max:1000',
                'price' => 'required|numeric',
                'cancelled_price' => 'required|numeric',
                'discount' => 'required|numeric',
                'thumbnail' => 'image|nullable|max:5000',
                'images' => 'array',
                'images.*' => 'image|max:5000',
                'youtube_link' => 'nullable|url'

            ]);

            //select the prodduct involved
            $ProductDetails = $this->product_Table::where([
                ['unique_id','=', $productUniqueId]
            ])->first();
            //check if product was selectedd
            if($ProductDetails === null){
                throw new \Exception('Product does not exist');
            }

            //delete the selected images
            $this->deleteProductDetail($request, $this->product_detail);

            //create unique id for the product
            $unique_id = $ProductDetails->unique_id;

            //update the thumbnail image if a new one exists
            if(!empty($request->file('thumbnail'))){
                $thumbnailImageName = $this->uploadThumbnailImage($request, $this->product_Table);
            }

            $ProductDetails->category_unique_id = $request->category_unique_id;
            $ProductDetails->product_name = $request->input('product_name');
            $ProductDetails->product_description = strlen($request->input('product_description')) == 0 ? '' : $request->input('product_description');
            $ProductDetails->price = $request->input('price');
            $ProductDetails->cancelled_price = $request->input('cancelled_price');
            $ProductDetails->discount = $request->input('discount');
            $ProductDetails->youtube_link = strlen($request->input('youtube_link')) == 0 ? null : $request->input('youtube_link');
            if(!empty($request->file('thumbnail'))){
                $ProductDetails->thumbnail = $thumbnailImageName;
            }

            if($ProductDetails->save()){

                //upload more images
                if($request->has('images')){
                    //check for the existence of the thumbnail
                    $imageNameArray = $this->uploadMoreImage($request, $this->product_detail);

                    //store image names in the db
                    if(count($imageNameArray) > 0){

                        for($i = 0; $i < count($imageNameArray); $i++ ){

                            //create unique idd for each product details
                            $product_unique_id = $this->createNewUniqueId('product__details', 'unique_id');

                            $productDetails = new Product_Detail();
                            $productDetails->unique_id = $product_unique_id;
                            $productDetails->product_unique_id = $unique_id;
                            $productDetails->images = $imageNameArray[$i];

                            $productDetails->save();

                        }

                    }
                }

                return Redirect::back()->with('status', 'Product has been successfully updated!');

            }else{
                throw new \Exception('Pruduct could not be created, Please contact system adminstrator');
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

            $productDetail = $this->product_Table::where([
                ['unique_id', '=', $id]
            ])->first();

            if($productDetail === null){
                //return Redirect::back()->with('error', 'Selected Data does not exists');
                throw new \Exception('Selected Data does not exists');
            }

            //get the product details and delete the details
            $productDetailArray = $this->product_detail::Where([
                ['product_unique_id', '=', $productDetail->unique_id]
            ])->get();

            if(count($productDetailArray) > 0){
                foreach($productDetailArray as $m => $eachProductDetail){
                    //delete the image for the slider
                    if(file_exists(storage_path('app/'.$this->product_detail->productDetailsImagePath) . $eachProductDetail->images)){

                        $file_old = storage_path('app/'.$this->product_detail->productDetailsImagePath) . $eachProductDetail->images;
                        unlink($file_old);

                    }
                    $eachProductDetail->delete();
                }
            }

            //delete the image for the thumbnail
            if(file_exists(storage_path('app/'.$this->product_Table->productImagePath) . $productDetail->thumbnail)){

                $file_old = storage_path('app/'.$this->product_Table->productImagePath) . $productDetail->thumbnail;
                unlink($file_old);

            }

            //delete the slider it self
            if($productDetail->delete()){
                return redirect()->route('view_product')->with('status', 'Data was successfully deleted');
            }else{
                throw new \Exception('Data could not be deleted');
            }

        }catch(\Exception $exception){

            $errorMessage = $exception->getMessage();
            return Redirect::back()->with('error', $errorMessage);

        }
    }
}