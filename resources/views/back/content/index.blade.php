
@extends('back.layouts.app')

@section('content')
 <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Шинэ захиалгийн жагсаалт</h3>
        <div class="table-data__tool">
        
            
        </div>
       

         @if(Session::has('updated_content'))
             <div class="alert alert-success" role="alert">                     
                   
                  {{ session('updated_content') }}
                    
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

            	@foreach($contents as $s)
                <form action="{{ route('contents.update', $s->id )}}" method="POST" class="">

                	@csrf
                    @method('PATCH')
                   
                    <div class="form-group">
                        <label for="company" class=" form-control-label">{{ $s->title }}</label>
                        <input type="text" id="company" name="content" value="{{ $s->content }}" class="form-control">
                       
                    </div>             
                    
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-success btn-sm">Засах</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>

        

@endsection












