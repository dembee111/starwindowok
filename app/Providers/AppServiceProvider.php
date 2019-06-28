<?php

namespace App\Providers;

use App\Content;
use App\Customer;
use App\Order;
use App\PageView;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (View::exists('front.layouts.partials.header')) {

            View::composer('front.layouts.partials.header', function($view){

           
            $view->with('social', Content::where('path', 'social')->get());
        });
        }


        if (View::exists('back.layouts.partials.sidebar')) {

            View::composer('back.layouts.partials.sidebar', function($view){
            
            $id = Auth::user()->id;

            $user = User::findOrFail($id);
           
            $view->with('user', $user);
        });
        }

        if (View::exists('back.layouts.partials.sidebar')) {

            View::composer('back.layouts.partials.sidebar', function($view){
            
             $orders = Order::where('status', 1)->get();

             $newOrders = count($orders);        
           
            $view->with('newOrders', $newOrders);
        });

        View::composer('back.layouts.partials.static', function($view){
            
             $orders = Order::where('status', 1)->get();

             $newOrders = count($orders);        
           
            $view->with('newOrders', $newOrders);
        });

         View::composer('back.layouts.partials.static', function($view){
            
             $orderall = Order::all();

             $niit = count($orderall);        
           
            $view->with('niit', $niit);
        });

          View::composer('back.layouts.partials.static', function($view){
            
             $customerall = Customer::all();

             $ncustomer = count($customerall);        
           
            $view->with('ncustomer', $ncustomer);
        });
        }

        if (View::exists('back.layouts.partials.static')) {

            View::composer('back.layouts.partials.static', function($view){
            
             $counter = PageView::find(1);         
             $view->with('counter', $counter);
        });
        }

        if (View::exists('back.layouts.partials.navbar')) {

            View::composer('back.layouts.partials.navbar', function($view){
            
             $user = User::find(1);         
             $view->with('user', $user);
        });
        }
        
    }
}
