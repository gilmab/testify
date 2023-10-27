<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category ;
use App\Models\Product ;

class AdminController extends Controller
{
    public function view_category() {
        $data = Category::all() ;

        return view('admin.category', compact('data')) ;
    }
    public function add_category(Request $request){

        $data = new Category ;

        $data->category_name = $request->category ;

        $data->save() ;

        return redirect()->back()->with('message','catt added') ;
    }

    public function delete_category($id){

        $data = Category::find($id) ;
        $data->delete() ;

        return redirect()->back()->with('message', 'Your category get deleted') ;
    }

    public function view_product(){
        $category = Category::all() ;
        return view('admin.product', compact('category')) ;
    }

    public function add_product(Request $request ){

        $product = new Product ;
        $product->title = $request->title ;

        $product->description = $request->description ;

        $product->price	 = $request->price ;

        $product->quantity = $request->quantity ;

        $product->discount_price = $request->discount_price ;

        $product->category = $request->category ;

        $image = $request->image ;
        $imagename = time().'.'.$image->getClientOriginalExtension() ;

        $request->image->move('product', $imagename) ;

        $product->image = $imagename ;


        $product->save() ;

        return redirect()->back()->with('message', 'Product Added  success') ;


    }

    public function show_product(){
        $product = Product::all() ;
        return view('admin.show_product', compact('product')) ;
    }

    public function delete_product($id) {

        $product = Product::find($id) ;
        $product->delete() ;
        // Pour envoyer un message à notre vue utiliser le with
        return redirect()->back()->with('message', 'Product deleted successfully') ;

    }

    public function edit_prod($id){

        $product = Product::find($id) ;
        $category = category::all() ;

        return view ('admin.edit_prod', compact('product','category')) ;

    }

    public function update_product(Request $request, $id){

        $product = Product::find($id) ;

        $product->title = $request->title ;
        $product->description = $request->description ;
        $product->price = $request->price ;
        $product->quantity = $request->quantity ;
        $product->category = $request->category ;
        $product->discount_price = $request->discount_price ;

        $image = $request->image ;
        if($image){
            $imagename= time().'.'.$image->getClientOriginalExtension() ;
        $request->image->move('product/', $imagename);

        $product->image = $imagename ;
        }


        $product->save() ;
        return redirect()->back()->with('message', 'Product updated') ;

    }

    public function order(){
        return view('admin.order'); 
    }

}
