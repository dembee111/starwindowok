@extends('back.layouts.app')

@section('styles')
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
 
@endsection

@section('content')
 <div class="row text-left">
        <div class="col-lg-9 col-offset-3">
            <div class="card">
                <div class="card-header">
                    <strong>Зураг</strong> Нэмэх
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

                    @if(Session::has('created_photo'))
                         <div class="alert alert-success" role="alert">                     
                               
                              {{ session('created_photo') }}
                                
                         </div>
                     @endif
                    
                    <form method="POST" action="{{ route('medias.store') }}" class="dropzone" enctype="multipart/form-data">

                        @csrf                                        

                      

                    </form>
                </div>
            </div>
        </div>
    </div>

        

@endsection

@section('scripts')
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

@endsection