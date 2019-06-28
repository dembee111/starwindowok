<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Notifications\RepliedToThread;
use App\Order;
use App\User;
use App\logsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth')->only('index', 'ordered','update','show','cancel','destroy');
         $this->middleware('auth')->except('store');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customer = Customer::where('title', 'захиалага хийсэн хэрэглэгч');
        $orders = Order::Neworder()->get();       
     

        return view('back.orders.index', compact('orders'));


        
    }


    
    public function ordered()
    {
        $orders = Order::Oldorder()->get();

        return view('back.orders.ordered', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $customer = Customer::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'title' => 'захиалага хийсэн хэрэглэгч',
            'text' => 'захиалага хийсэн хэрэглэгч'

        ]);


        $customer->order()->create([
            'customer_id' => $customer->id,
            'window_type' => $request->input('window_type'),
            'window_size' => $request->input('window_size'),
            'window_price' => $request->input('window_price'),
            'window_quantity' => $request->input('window_quantity'),
            'order_address' => $request->input('order_address')
        ]);

        $user = User::get();
        Notification::send($user, new RepliedToThread($customer));
        
        // $user->notify(new RepliedToThread($customer));

        Session::flash('created_order', 'Таны захиалага амжилттай нэмэгдлээ');

        return redirect('/calculator');
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

  
    public function cancel(Request $request, $id)
    {
           $order = Order::findOrFail($id);      
           $order->status  = $request->input('status');         

            $order->save();

            

            

   
         
        Session::flash('cancel_order', $order->id . ' Дугаартай Захиалага цуцлагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Захиалага цуцалсан байна"
            ]);

        return redirect('/order');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $messages = [
            'required' => 'Энэ Тайлбар хэсэгт заавал оруулах ёстой.'
            
        ];
        $validator = Validator::make($request->all(), [
            'comment' => ['required']          
            
        ], $messages);

        if ($validator->fails()) {
            return redirect('/order')
                        ->withErrors($validator)
                        ->withInput();
        }

           $order = Order::findOrFail($id);
      
           $order->status  = $request->input('status');
           $order->comment = $request->input('comment');

           $order->save();

       
         
        Session::flash('updated_order', 'Таны Гүйцэтгэсэн ажил амжилттай гүйцэтгэсэн төлөвт шилжлээ');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Захиалагыг гүйцэтгэсэн төлөвт шилжүүлсэн байна"
            ]);

        return redirect('/order');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);       

        $order->delete();

        Session::flash('deleted_order', 'Мэдээлэл амжилттай устгагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Захиалага усгасан байна"
            ]);

        return redirect('/oldorder');
    }
}
