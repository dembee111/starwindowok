@extends('back.layouts.app')

@section('styles')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

@endsection

@section('content')
   <div class="row text-left">
        <div class="col-lg-9 col-offset-3">
            <div class="card">
                <div class="card-header">
                    <strong>Мэдээлэл</strong> Нэмэх
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
					
                    <form method="POST" action="{{ route('posts.store') }}" class="needs-validation" novalidate enctype="multipart/form-data">

                    	@csrf
                    	<div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Гарчиг</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="name" name="title" placeholder="Гарчиг..." value="{{ old('title') }}" class="form-control" required autocomplete="title" autofocus />                                 
                                <span class="help-block">Мэдээний гарчиг..</span>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Бичвэр</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="body" id="textarea-input" rows="9" placeholder="Бичвэр..." class="form-control" required>{{ old('body') }}</textarea>
                            </div>
                        </div>                     

                         

                        <div class="row form-group mt-5">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Зураг оруулах</label>
                            </div>
                            <div class="col-12 col-md-9">
                                
                                    <label for="exampleFormControlFile1">Зурагаа сонгоно уу</label>
                                    <input type="file" name="photo_id" class="form-control-file" id="exampleFormControlFile1">
                                
                            </div>
                        </div>
                            
                
                
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>&nbsp;Мэдээ Нэмэх&nbsp;
                      </button>
                    <button type="reset" class="btn btn-outline-danger btn-sm">
                        <i class="fa fa-ban"></i> Дахин эхлүүлэх
                    </button>
               
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