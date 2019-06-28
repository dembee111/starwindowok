@extends('back.layouts.app')

@section('content')
   <div class="row text-left">
        <div class="col-lg-9 col-offset-3">
            <div class="card">
                <div class="card-header">
                    <strong>Хэрэглэгч</strong> Нэмэх
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
					
                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate enctype="multipart/form-data">

                    	@csrf
                    	<div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Нэр</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="name" name="name" @error('name') is-invalid @enderror" placeholder="Нэр..." value="{{ old('name') }}" class="form-control" required autocomplete="name" autofocus />                                 
                                <span class="help-block">Хэрэглэгчийн нэр</span>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="email" class=" form-control-label">Имэйл</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="email" name="email" placeholder="Имэйл.." value="{{ old('email') }}" 
                                class="form-control" class="@error('email') is-invalid @enderror" required autocomplete="email" autofocus/>
                                <span class="help-block">Хэрэглэгчийн имэйл</span>
                                
                            </div>
                             
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="phone" class=" form-control-label">Утас</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="phone" name="phone" placeholder="Утас.." value="{{ old('phone') }}" 
                                class="form-control" class="@error('phone') is-invalid @enderror" required autocomplete="phone" autofocus/>
                                <span class="help-block">Хэрэглэгчийн утас</span>
                                
                            </div>
                             
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password" class=" form-control-label">Нууц үг</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password" name="password" placeholder="Нууц үг" class="form-control" required autocomplete="password" autofocus/>
                                <span class="help-block">Нууц үг..</span>
                                
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="password-confirm" class=" form-control-label">Нууц үг давтах</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="password-confirm" name="password_confirmation" placeholder="Нууц үг давтах" class="form-control" required autocomplete="new-password">
                                <span class="help-block">Нууц үг давтах..</span>
                            </div>
                        </div>

                         <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Хэрэглэгчийн эрх</label>
                            </div>
                            <div class="col-12 col-md-9">
                                
                                    <select name="role_id" id="select" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>  
                                        @endforeach                                     
                                    </select>
                                
                            </div>
                        </div>

                        <div class="row form-group mt-5">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Цээж зураг</label>
                            </div>
                            <div class="col-12 col-md-9">
                                
                                    <label for="exampleFormControlFile1">Зурагаа сонгоно уу</label>
                                    <input type="file" name="photo_id" class="form-control-file" id="exampleFormControlFile1">
                                
                            </div>
                        </div>
                            
                
                
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i>&nbsp;Нэмэх&nbsp;
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