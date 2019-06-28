@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Мэдээний хэсэг</h3>
        <div class="table-data__tool">
        
            <div class="table-data__tool-right">
                <a href="{{ route('posts.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Мэдээ нэмэх</a>
                
            </div>
        </div>
        @if(Session::has('created_post'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('created_post') }}
                    
             </div>
         @endif

         @if(Session::has('updated_post'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_post') }}
                    
             </div>
         @endif

         @if(Session::has('deleted_post'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('deleted_post') }}
                    
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
                        <th>Гарчиг</th>
                        <th>Бичвэр</th>
                        <th>Нийтэлсэн</th>
                        <th>статус</th>
                        <th>Огноо</th>                                            
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>{{ $post->id }}</td>
                        

                        <td><img width="250px" height="180px" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}"></td>
                       
                        
                        <td>{{ $post->title }}</td>
                        <td>
                            <span class="block-email">{!! str_limit($post->body, 100) !!}</span>
                        </td>
                        <td class="desc">{{ $post->user->name }}</td>
                       {{--  <td>
                            @if($post->is_active === 1)
                                <span class="status--process">Идэвхитэй</span>
                            @elseif($post->is_active === 0)
                               <span class="status--denied">Идэвхигүй</span>
                            @endif
                        </td> --}}
                        <td>{{ $post->created_at }}</td>                     
                        
                        
                         
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <a href="{{ route('posts.edit', $post->id )}}" class="item" data-toggle="tooltip" data-placement="top" title="Засах">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <button href="javascript:;" type="button" class="item" data-toggle="modal" data-target="#staticModalPost" onclick="deletePost({{$post->id}})">
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