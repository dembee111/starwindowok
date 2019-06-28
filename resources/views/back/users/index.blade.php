@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Хэрэглэгчийн мэдээлэл</h3>
        <div class="table-data__tool">
        
            <div class="table-data__tool-right">
                <a href="{{ route('users.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Хэрэглэгч нэмэх</a>
                
            </div>
        </div>
        @if(Session::has('created_user'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('created_user') }}
                    
             </div>
         @endif

         @if(Session::has('updated_user'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_user') }}
                    
             </div>
         @endif

         @if(Session::has('deleted_user'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('deleted_user') }}
                    
             </div>
         @endif
        <div class="table-responsive m-b-40">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>ID</th>
                        <th>Зураг</th>
                        <th>Нэр</th>
                        <th>Имэйл</th>
                        <th>Хэрэглэгчийн төрөл</th>
                        <th>Огноо</th>
                        <th>статус</th>                    
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                    @foreach($users as $user)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{ $user->id }}</td>
                        

                        <td><img width="130px" height="120px" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}"></td>
                       
                        
                        <td>{{ $user->name }}</td>
                        <td>
                            <span class="block-email">{{ $user->email }}</span>
                        </td>
                        <td class="desc">{{ $user->role->name }}</td>
                        <td>{{ $user->created_at }}</td>
                        
                        <td>
                            @if($user->is_active === 1)
                                <span class="status--process">Идэвхитэй</span>
                            @elseif($user->is_active === 0)
                               <span class="status--denied">Идэвхигүй</span>
                            @endif
                        </td>
                        
                         
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <a href="{{ route('users.edit', $user->id )}}" class="item" data-toggle="tooltip" data-placement="top" title="Засах">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <button href="javascript:;" type="button" class="item" data-toggle="modal" data-target="#staticModal" onclick="deleteData({{$user->id}})">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                  @else
                     <h4>Ямар нэгэн мэдээлэл байхгүй байна.</h4>
                  @endif
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->

        

@endsection