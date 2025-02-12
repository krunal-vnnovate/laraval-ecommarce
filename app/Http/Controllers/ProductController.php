<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index(){
        $showProduct = Product::query()->orderBy('id', 'desc')->get();
        return view('product.index',compact('showProduct'));
    }

    public function create(){
        // die();
        $categoryName['getCatName'] = Category::get();
        return view('product.create', $categoryName);
    }

    public function store(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'status' => 'required',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Collect the product input data from the request
        $productInput = $request->all();
    
        // Handle the product image upload
        if ($productImage = $request->file('product_img')) {
            // Define the path where the image will be stored
            $productPath = public_path('storage/product');
            
            // Generate a unique image name
            $productImageName = date('YmdHis') . '.' . $productImage->getClientOriginalExtension();
    
            // Move the image to the defined storage path
            $productImage->move($productPath, $productImageName);
    
            // Update the product input with the image path
            $productInput['product_img'] = 'storage/product/' . $productImageName;
        }
    
        // Create the product in the database
        Product::create([
            'category_id' => $productInput['category_id'],
            'product_name' => $productInput['product_name'],
            'product_description' => $productInput['product_description'],
            'product_price' => $productInput['product_price'],
            'status' => $productInput['status'],
            'product_img' => $productInput['product_img'],
        ]);
    
        // Redirect to the product page with a success message
        return redirect('product')->with('Save', 'Record Created Successfully!');
    }

    public function edit($id){
        $product = Product::find($id);
        $categoryName['getCatName'] = Category::get();
        return view('product.edit',$categoryName, ['showProduct'=>$product]);
    }

    public function update(Request $request, $id){
// dd($request->all());
        $productUpdate = Product::find($id);

        $productUpdate->category_id = $request->category_id;
        $productUpdate->product_name = $request->product_name;
        $productUpdate->product_description = $request->product_description;
        $productUpdate->product_price = $request->product_price;
        $productUpdate->product_img = $request->product_img;
        $productUpdate->status = $request->status;

        $updatImage = $request->all();

        if($image = $request->file('product_img')){
            $productPath = public_path('storage/product');
            $productImageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($productPath, $productImageName);
            $updatImage['product_img'] = 'storage/product/' . $productImageName;
        }

        // dd($updatImage);
        // dd($productUpdate->product_img = $updatImage['product_img']);
        $productUpdate->product_img = $updatImage['product_img'];
        if($productUpdate->save()){
            return redirect('product')->with('success','Record Updated Successfully!!');
        } else{
            echo "Record Can't be deleted!!";
        }
    }

    public function delete($id){
        $isDelete = Product::destroy($id);

        if($isDelete){
            return redirect('product');
        } else{
            echo "Record Can't be deleted!!";
        }
    }

    public function show(){
        $showProduct = Product::query()->orderBy('id', 'desc')->get();
        return view('frontend.index',compact('showProduct'));
    }

    public function Quickshow($id){
        $reviewProduct = Product::find($id);
        return response()->json($reviewProduct);
    }
    

    // JS validation
    // public function store(Request $request) 
    // {
    //     // Validate the input fields
    //     $validator = Validator::make($request->all(), [
    //         'category_id' => 'required',
    //         'product_name' => 'required',
    //         'product_description' => 'required',
    //         'product_price' => 'required',
    //         'product_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // image validation
    //     ]);
    
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 0,
    //             'message' => $validator->errors()->first(),
    //             'data' => [],
    //         ], 422);
    //     }
    
    //     try {
    //         // Check if file exists and log the file type for debugging
    //         if ($request->hasFile('product_img')) {
    //             $file = $request->file('product_img');
    //             \Log::info('File Name: ' . $file->getClientOriginalName());
    //             \Log::info('Mime Type: ' . $file->getMimeType());
    
    //             // Store the image file
    //             $profileImagePath = $file->store('product_img', 'public');
    //         } else {
    //             $profileImagePath = null; // If no image is uploaded, set to null
    //         }
    
    //         // Create the product record
    //         $product = Product::create([
    //             'category_id' => $request->input('category_id'),
    //             'product_name' => $request->input('product_name'),
    //             'product_description' => $request->input('product_description'),
    //             'product_price' => $request->input('product_price'),
    //             'product_img' => $profileImagePath,  // Image path or null
    //             'status' => 'Active',  // Assuming default status is Active
    //         ]);
    
    //         return response()->json([
    //             'status' => 1,
    //             'message' => 'Product created successfully.',
    //             'data' => $product,
    //         ], 201);
    
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'Failed to create product. Please try again.',
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }
    
    
    
    
    

}
