
@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Шинэ захиалгийн жагсаалт</h3>
        <div class="table-data__tool">
        
            
        </div>
       

         @if(Session::has('updated_social'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_social') }}
                    
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
        

        <div class="card">
            <div class="card-header">Сошиал тохируулага</div>
            <div class="card-body card-block">

            	@foreach($social as $s)
                <form action="{{ route('socials.update', $s->id )}}" method="POST" class="">

                	@csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fab fa-{{ $s->name }}"></i>
                            </div>
                            <input type="text" name="name" value="{{ $s->name }}" hidden class="form-control">
                            <input type="text" id="username" name="url" value="{{ $s->url }}" class="form-control">
                        </div>
                    </div>               
                    
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-success btn-sm">Засах</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>

        

@endsection












