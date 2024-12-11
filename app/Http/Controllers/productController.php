<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;

use App\Models\User;

class productController extends Controller

{

    public function products(){
        // $products = product::get();
        return view('products',['products'=>product::get() ]);
    }

    public function welcome(){
        $products = product::select('*')->get();
        $product =  product::get();
        $title = "Best Seller - ". count($product);
        return view('welcome',['products'=> $products, 'title' => $title]);
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){
        // upload image
        // dd($request->file());

        $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000'

        ]);

        $imageName = time().'.'.$request->file->extension();
        $request->file->move(public_Path('product'), $imageName);
        // dd($imageName);

        $product = new product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();
         return back()->withSuccess('Product Create !!!') ;

    }

    public function edit($id)
    {
        // dd($id);

        $product = product::where( 'id',$id)->first();
        return view ('edit',['product' => $product ]);

    }

    public function update(Request $request,$id){

            // dd($request->file());
        $product = Product::where('id',$id)->first();

        if(isset($request->file)){

            $imageName = time().'.'.$request->file->extension();
            $request->file->move(public_Path('product'), $imageName);
            $product->image = $imageName;
        }

            // $imageName = time().'.'.$request->file->extension();
            // $request->file->move(public_Path('product'), $imageName);

            // dd($imageName);

            // $product = new product;
            $product->name = $request->name;
            $product->description = $request->description;

            $product->save();
            return back()->withSuccess('product Update !!!');


    }

    public function destroy($id){
      $product = product::where('id',$id)->first();
      $product->delete();
      return back()->withSuccess('product Delete !!!');
    }

    // Login function
    // add to cart section

    function login()
    {
        return view('products')->with('products',product::all());
        // return User::where(['email'=>$request->email])->first();
    }


    function add(Request $request)
    {

        if($request->session()->has('user'))
        {
            $cart= new Cart;
            $cart->product_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return "/";

        }else{


            return redirect('/');
        }

    }


    // public function add(product $product)
    // {
    //     $add = session()->get('add');

    //     if(!$add){

    //             $add=[

    //                 $product->id =>[

    //                     'name'      => $product->name,
    //                     'Quantity'  => 1,
    //                     'Price'     => $product->price,
    //                     'Image'     => $product->image

    //                 ]

    //                 ];


    //         session()->put('add',$add);
    //         return redirect()->route(route:'add')->with('sussess',"Added To Cart");


    //     }


    //     if(isset($add[$product->id])){

    //         $add[$product->id]['Quantity']++;
    //         $session()->put('add',$add);
    //         return redirect()->route('add')->with('sussess',"Added To Cart");
    //     }



    //     $add[$product->id]  =  [

    //         'name'      => $product->name,
    //         'Quantity'  => 1,
    //         'Price'     => $product->price,
    //         'Image'     => $product->image,


    //     ];

    //     $session()->put('add',$add);
    //      return redirect()->route('add')->with('sussess',"Added To Cart");

    // }
}
