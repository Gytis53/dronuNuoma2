<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Address;
use App\Customer;
use App\Message;
use App\Event;
use App\Mail\SingleMail;
use App\Product;
use App\ProductType;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use Auth;
use Session;

class PrekybaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:customer',['except' => ['logout','getEvents']]);
    }

    public function leaveReview(Request $request){
        if(Auth::guard('customer')) {
            $user=Auth::user();
            Review::create([

                'customer_customer_id' =>$user->customer_id,
                'product_product_id' => $request['pid'],
                'title' => $request['title'],
                'note' => $request['message'],
                'rating' => $request['rating'],
            ]);
            return redirect('store')->withSuccessMessage('Atsiliepimas pridėtas');

        }
        return redirect(route('home'));
    }


}
