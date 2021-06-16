<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class ProductsController extends Controller
{
    public function view_products(){
        return view('view_products',['products'=>products::get()->toArray()]);
    }
    public function buy_now($id){
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $product = products::find($id)->toArray();
        $amount = $product['price'];
        $amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'INR',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;

        return view('buy_now',compact('product', 'intent'));
    }
    public function purchase(Request $request)
    {
        if($request->_token == ''){
            return redirect('/')->with('error', 'Unable to purchase product!');
        }else{
            return redirect('/')->with('message', 'Product purchased successfully!');
        }
    }
}
