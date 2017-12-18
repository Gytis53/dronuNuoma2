<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;
use App\Order;
use App\Customer;
use Carbon\Carbon;

use Auth;
use Session;

class OrderContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer',['except' => ['logout','getEvents']]);
    }

    public function saveOrder(Request $request){
        if(Auth::guard('customer')) {
            $user=Auth::user();
            $mytime=Carbon::now();
            $mytime2=Carbon::tomorrow();
            Order::create([

                'customer_customer_id' =>$user->customer_id,
                'reference' => 'reference',
                'billing_name' => $request['billing_name'],
                'delivery_name' => $request['billing_name'],
                'note' => $request['note'],
                'card_number' => $request['card_number'],
                'expiry_date' => $request['expiry_date'],
                'cvv' => $request['cvv'],

                'delivery_date' => $mytime2->toDateTimeString(),

                'order_date' => $mytime->toDateTimeString(),
                'confirmation_number' => '123',
                'courier_courier_id' => '1',
                'order_status_order_status_id' => '1',
            ]);

            //$order=Order::all();
            return view('order-summary')->with('order', $request);

        }
        return redirect(route('home'));
    }
    public function getOrders()
    {
        $orders= Order::all();
        return view('orders-view',['orders'=>$orders]);
    }
    public function cancelOrder($id)
    {
        $user=Auth::user();
        if(Auth::guard('customer')) {
            $order = Order::find($id);
                $order->delete();
                return back()->with('success', 'Užsakymas atšauktas!');
        }
        return redirect(route('customer.login'));
    }
    public function cancelUserOrder($id)
    {
        $user=Auth::user();
        if(Auth::guard('customer')) {
            $order = Order::find($id);

            if ($order->customer_customer_id == $user->customer_id) {
                $order->delete();
                return back()->with('success', 'Užsakymas atšauktas!');
            }
            return redirect(route('customer.getProfile'))->with('fail', 'Ne tas vartotojas');
        }
        return redirect(route('customer.login'));
    }
    public function getOrdersReport(Request $request){
        if(Auth::check()) {
            $user = Auth::user();
            if ($user->customer_status_customer_status_id == 9257999) {
                $date_from=$request['date_from'];
                $date_to=$request['date_to'];

                $orders=Order::where('order_date','>=',$date_from,'and','order_date','<=',$date_to)->
                leftJoin('customer','customer_customer_id','customer_id')->
                leftJoin('courier','courier_courier_id','courier_id')->get();

                return view('order-report',['orders'=>$orders,
                    'date_from'=>$date_from,'date_to'=>$date_to]);
            }
            return redirect(route('customer.getProfile'));
        }
        return redirect(route('customer.login'));
    }
    public function makeOrderReports(){
        if(Auth::check()) {
            $user=Auth::user();
            if($user->customer_status_customer_status_id==9257999){


                $totalCount=Order::all()->count();

                return view('order-make-reports',['totalCount'=>$totalCount
                   ]);
            }
            return redirect(route('customer.getProfile'));
        }
        return redirect(route('customer.login'));
    }

}
