@extends('back.layouts.app')

@section('content')

   <div class="row text-left">
        <div class="col-lg-9 col-offset-3">
            <div class="card">
                <div class="card-header">
                    <strong>Зураг</strong>&nbsp;Солих
                </div>
                <div class="card-body card-block">
                	@if ($errors->any())
					    <div class="alert alert-danger" role="alert">
					        
					            @foreach ($errors->all() as $error)
					                {{ $error }}
					                <br/>
					            @endforeach
					       
					    </div>
					@endif
					
                    <form method="POST" action="{{ route('medias.update', ['id' => $photo->id]) }}"  enctype="multipart/form-data">

                    	 @csrf
                         @method('PATCH')
                                        

                      
                       <div class="row form-group mt-5">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Зураг оруулах</label>
                            </div>
                            <div class="col-2 col-md-2">
                                 <img width="100px" height="100px" src="{{ $photo->file ? $photo->file : 'http://placehold.it/400x400' }}" class="img-responsive rounded">
                            </div>
                            <div class="col-6 col-md-6 text-left">
                                
                                    <label for="exampleFormControlFile1">Зурагаа сонгоно уу</label>
                                    <input required  type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                                    
                            </div>

                            
                        </div>
                            
                
                
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>&nbsp;Зураг солих&nbsp;
                      </button>
                    <a type="button" href="{{ route('medias.index') }}" class="btn btn-outline-danger btn-sm">
                        <i class="fa fa-ban"></i> Буцах 
                    </a>
               
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection