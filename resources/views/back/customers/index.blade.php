@extends('back.layouts.app')

@section('content')
    <!-- DATA TABLE-->
       <div class="row">
           <div class="col-6 col-offset-6">
              @if(Session::has('deleted_customer'))
                 <div class="alert alert-danger" role="alert">                     
                       
                      {{ session('deleted_customer') }}
                        
                 </div>
             @endif
           </div>
       </div>
        <div class="table-responsive m-b-40">
           
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Нэр</th>
                        <th>Холбоо барих</th>
                        <th>Имэйл</th>
                        <th>Гарчиг</th>
                        <th>Зурвас</th>
                        <th>Үйлдэл</th>
                    </tr>
                </thead>
                <tbody >
                  @if($customers)
                      @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->title }}</td>
                            <td>{{ str_limit($customer->text, 100) }}</td>
                            <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Имэйл Илгээх">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                
                                <a href="{{ route('customer.show', $customer->id )}}" class="item" data-toggle="tooltip" data-placement="top" title="Үзэх">
                                    <i class="zmdi zmdi-more"></i>
                                </a>

                               
                            </div>
                        </td>
                        </tr>
                      @endforeach
                  @endif
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->       

@endsection