
@extends('back.layouts.app')

@section('content')
 <div class="row text-left">
      <div class="col-lg-9 col-offset-3">
        <h3 class="title-5 m-b-35">Профайл</h3>
        <div class="table-data__tool">
        
            
        </div>    

       
        <div class="card">
          <div class="card-header">
              <strong class="card-title mb-3"> Миний мэдээлэл</strong>
          </div>
          <div class="card-body">
              <div class="mx-auto d-block">
                  <img class="rounded-circle mx-auto d-block" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="Card image cap" width="250px">
                  <h5 class="text-sm-center mt-2 mb-1">{{ $user->name }}</h5>
                  <div class="location text-sm-center">
                      <i class="fa fa-map-marker"></i> {{ $user->role->name }}</div>
              </div>
              <hr>
              <div class="card-text text-sm-center">
                  <a href="#">
                      <i class="fab fa-facebook pr-1"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-twitter pr-1"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-linkedin pr-1"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-pinterest pr-1"></i>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>
        

@endsection












