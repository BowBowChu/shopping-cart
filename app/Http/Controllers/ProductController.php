<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
class ProductController extends Controller
{
	public function getIndex()
	{
	  //$products = Product::all();
    $products = Product::paginate(3);
      return view('shop.index',['products'=>$products]);

    }

    public function getAddToCart(Request $request,$id)
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$product->id);
      
        $request->session()->put('cart',$cart);
        return redirect()->back();
     //   return redirect()->route('product.index');
    }

    public function getCart(){
      if(!Session::has('cart')){
        return view('shop.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
    return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    // https://openclassrooms.com/forum/sujet/laravel-probleme-boutique-par-utilisateur
    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
 
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
 
    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
 
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
 
        return redirect()->route('product.shoppingCart');
    }


    public function getCheckout()
    {
         if(!Session::has('cart'))
         {
            return view('shop.shopping-cart');
         }
          $oldCart = Session::get('cart');
          $cart = new Cart($oldCart);
          $total = $cart->totalPrice;
          return view('shop.checkout',['total' => $total]);
    }

    public function postCheckout(Request $request)
    {               
         if(!Session::has('cart'))
         {
            return view('shop.shoppingCart');
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         try{
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = str_random(8);

            Auth::user()->orders()->save($order);
         }catch(\Exception $e){
          // return redirect()->route('checkout')->with('error',$e->getMessage());
             throw $e;
         }
         Session::forget('cart');
         return redirect()->route('product.index')->with('success','Successfully purchased products');
         
    }


   // public function  getSearch(Request $request)
    public function  getSearch($name)
    
    {
        //$name = $request->input('search');
       // "%$name%"
       $products = Product::where('title', 'LIKE', "%$name%")->paginate(3); 

        if(empty($products)){
           $products = Product::paginate(3);
           return view('shop.index',['products'=>$products]);
        }else{
          return view('shop.index',['products'=>$products]);
        }
      
    }



}
