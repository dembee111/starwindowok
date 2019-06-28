@extends('back.layouts.app')

@section('content')
    <!-- DATA TABLE-->
       
        <div class="table-responsive m-b-40">
           
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Нэр</th>
                        <th>Хийсэн үйлдэл</th>
                        <th>Үүсгэсэн огноо</th>  
                        <th>Өөрчилөсөн огноо</th>                          
                    </tr>
                </thead>
                <tbody >
                  @if(count($logs) > 0)
                      @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->user->name }}</td>
                            <td>{{ $log->log }}</td>
                            <td>{{ $log->created_at }}</td> 
                            <td>{{ $log->updated_at }}</td>                   
                          
                        </tr>
                      @endforeach
                  @endif
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->       

@endsection