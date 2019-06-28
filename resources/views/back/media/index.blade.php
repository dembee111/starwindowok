@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Медиа контентийн хэсэг</h3>
        <div class="table-data__tool">
        
            <div class="table-data__tool-right">
                <a href="{{ route('medias.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Зурагны жагсаалт</a>
                
            </div>
        </div>
        

         @if(Session::has('updated_photo'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_photo') }}
                    
             </div>
         @endif

         @if(Session::has('deleted_photo'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('deleted_photo') }}
                    
             </div>
         @endif
        <div class="table-responsive m-b-40">
            <table class="table table-data2">
                <thead>
                    <tr>                        
                        <th>ID</th>
                        <th>Зураг</th>
                        <th>Гарчиг</th>
                        <th>Огноо</th>                                            
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($photos) > 0)
                    @foreach($photos as $photo)
                    <tr class="tr-shadow">
                        
                        <td>{{ $photo->id }}</td>                       

                        <td><img width="250px" height="180px" src="{{ $photo->file }}"></td>
                        @if($photo->title == null) 
                            <td style="color:orange;">Ашиглагдаагүй </td> 
                        @else
                            <td>{{ $photo->title }}</td> 
                        @endif          
                        <td>{{ $photo->created_at }}</td>                   
                        
                        <td>
                            <div class="table-data-feature">

                               <a href="{{ route('medias.edit', $photo->id )}}" class="item" data-toggle="tooltip" data-placement="top" title="Засах">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                              
                               <form action="{{ route('medias.destroy', $photo->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                   <button  type="submit" class="item" >
                                      <i class="zmdi zmdi-delete"></i>
                                    </button>
                               </form>
                               
                                
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