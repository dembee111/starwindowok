@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Шинэ захиалгийн жагсаалт</h3>
        <div class="table-data__tool">
        
            
        </div>
       

         @if(Session::has('updated_order'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_order') }}
                    
             </div>
         @endif

         @if(Session::has('cancel_order'))
             <div class="alert alert-warning" role="alert">                     
                   
                  {{ session('cancel_order') }}
                    
             </div>
         @endif

         @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                  
                      @foreach ($errors->all() as $error)
                          {{ $error }}
                          <br/>
                      @endforeach
                 
              </div>
          @endif
        <div class="table-responsive m-b-40">
            <table class="table table-sm table-borderless table-data3">
                <thead>
                    <tr>                    
                     
                        <th>Цонхны төрөл</th>
                        <th>Цонхны хэмжээ</th>
                        <th>Цонхны Үнэ</th>
                        <th>Цонхны ширхэг</th>
                        <th>Захиалгийн хаяг</th>
                        <th>Захиалгийн нэр</th>
                        <th>Утас</th>
                        <th>Имэйл</th>                       
                        
                        <th>Огноо</th>                                            
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($orders) > 0)
                    @foreach($orders as $order)
                    <tr>                        
                        <td>{{ $order->window_type }}</td>
                        <td>{{ $order->window_size }}</td> 
                        <td>{{ $order->window_price }}</td>  
                        <td>{{ $order->window_quantity }}</td>
                        <td>{{ $order->order_address }}</td>
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->customer->phone }}</td>
                        <td>{{ $order->customer->email }}</td>
                        <td>{{ $order->created_at }}</td>                

                       
                        <td>
                            <div class="table-data-feature">                                
                                
                                <button href="javascript:;" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#staticConfirmOrder" onclick="confirmOrder({{$order->id}})">
                                    <i class="fa fa-check">&nbsp;Гүйцэтгэсэн</i>
                                </button>

                                 <button href="javascript:;" type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#staticCancelOrder" onclick="cancelOrder({{$order->id}})">
                                    <i class="fa fa-check">&nbsp;&nbsp;Цуцлах&nbsp;&nbsp;</i>
                                </button>
                                
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                  @else
                    <tr> 
                     <td>Ямар нэгэн мэдээлэл байхгүй байна.</td>
                   </tr>
                  @endif
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->

        

@endsection