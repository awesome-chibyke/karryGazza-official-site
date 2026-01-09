<?php

namespace App\Traits;

use App\User;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

trait ProductTraits{

    function uploadThumbnailImage($request, $poductModel){

        if($request->hasFile('thumbnail')){

            //get filename with the extension
            $filenameWithExt = $request->file('thumbnail')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();

            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload image
            // $path = $request->file('thumbnail')->storeAs($poductModel->productImagePath, $fileNameToStore);
            
            Storage::disk('public')->putFileAs($poductModel->productImagePath, $request->file('thumbnail')->getRealPath(), $fileNameToStore, 'public');

            //intervention image to resize image
            // $imageData = Image::make($request->file('thumbnail'));
            // $width  = $imageData->width();
            // $height = $imageData->height();

            // if(){

            // }

            // create new image instance
            // $image = ImageManager::imagick()->read(Storage::disk('public')->get($poductModel->productImagePath . $fileNameToStore));

            // // resize to 300 x 200 pixel
            // $image->resize(300, 400);

        }

        return $fileNameToStore;

    }

    function uploadMoreImage($request, $productDdetailsModel){

        $nameArray = [];

        if($request->hasFile('images')){

            foreach ($request->file('images') as $imagefile) {

                //get filename with the extension
                $filenameWithExt = $imagefile->getClientOriginalName();

                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //get just extension
                $extension = $imagefile->getClientOriginalExtension();

                //file name to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;

                //upload image
                // $path = $imagefile->storeAs($productDdetailsModel->productDetailsImagePath, $fileNameToStore);

                Storage::disk('public')->putFileAs($productDdetailsModel->productDetailsImagePath, $imagefile->getRealPath(), $fileNameToStore, 'public');

                //ad the image names into an array
                $nameArray[] = $fileNameToStore;

            }

        }

        return $nameArray;

    }

    function deleteProductDetail($request, $productDetailModel){
        //delete the selected images
        if($request->has('delete_images')){
            foreach($request->input('delete_images') as $m => $eachImageToBeDeleted){
                //select the product deatil from the product detail table
                $eachProductDetail = $productDetailModel::where([
                    ['unique_id', '=', $eachImageToBeDeleted]
                ]);
                if($eachProductDetail !== null){
                    $eachProductDetail->delete();
                }
            }
        }
    }



}


?>
