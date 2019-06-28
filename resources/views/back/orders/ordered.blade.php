@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Гүйцэтгэсэн захиалага</h3>
        <div class="table-data__tool">
        
            
        </div>
       

         @if(Session::has('updated_order'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_order') }}
                    
             </div>
         @endif

         @if(Session::has('deleted_order'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('deleted_order') }}
                    
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
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                      
                        <th>ID</th>

                        <th>Цонхны төрөл</th>
                        <th>Цонхны хэмжээ</th>
                        <th>Цонхны Үнэ</th>
                        <th>Цонхны ширхэг</th>                       
                        <th>Захиалагчийн нэр</th>
                        <th>Утас</th>
                        <th>Статус</th>
                        <th>Тэмдэглэл</th>
                        <th>Огноо</th>                                            
                        <th></th>                  
                                               
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @if(count($orders) > 0)
                    @foreach($orders as $order)
                    <tr class="tr-shadow">                        
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->window_type }}</td>
                        <td>{{ $order->window_size }}</td> 
                        <td>{{ $order->window_price }}</td>  
                        <td>{{ $order->window_quantity }}</td>                       
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->customer->phone }}</td>
                        @if($order->status == 2)
                         <td style="color:green;">Гүйцэтгэсэн</td>
                        @elseif($order->status == 0)
                         <td style="color:red;">Цуцлагдсан</td>
                        @endif
                        <td>{{ $order->comment }}</td>                          
                        <td>{{ $order->created_at }}</td>                

                       
                        <td>
                            <div class="table-data-feature">                                
                                           <button title="Устгах" href="javascript:;" type="button" class="item" data-toggle="modal" data-target="#staticDeleteOrder" onclick="deleteOrder({{$order->id}})">
                                    <i class="zmdi zmdi-delete"></i>
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