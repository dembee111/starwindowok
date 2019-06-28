@extends('back.layouts.app')

@section('styles')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

@endsection

@section('content')
   <div class="row text-left">
        <div class="col-lg-9 col-offset-3">
            <div class="card">
                <div class="card-header">
                    <strong>Мэдээлэл</strong>&nbsp;Засах
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
					
                    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}"  enctype="multipart/form-data">

                    	 @csrf
                         @method('PATCH')
                    	<div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Гарчиг</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control" required autocomplete="name" autofocus />                                 
                                <span class="help-block">Мэдээний гарчиг</span>                               
                            </div>
                        </div>                     

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Бичвэр</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="body" id="textarea-input" rows="9" placeholder="Бичвэр..." class="form-control" required>{{ $post->body }}</textarea>
                            </div>
                        </div>    
                      
                       <div class="row form-group mt-5">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Зураг оруулах</label>
                            </div>
                            <div class="col-2 col-md-2">
                                 <img width="100px" height="100px" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" class="img-responsive rounded">
                            </div>
                            <div class="col-6 col-md-6 text-left">
                                
                                    <label for="exampleFormControlFile1">Зурагаа сонгоно уу</label>
                                    <input type="file" name="photo_id" class="form-control-file" id="exampleFormControlFile1">
                                    
                            </div>

                            
                        </div>
                            
                
                
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>&nbsp;Мэдээ Засах&nbsp;
                      </button>
                    <a type="button" href="{{ route('posts.index') }}" class="btn btn-outline-danger btn-sm">
                        <i class="fa fa-ban"></i> Буцах 
                    </a>
               
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script> 
    $(document).ready(function() {
            $('#textarea-input').summernote();
        });

   
              
</script>



@endsection