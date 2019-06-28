@extends('back.layouts.app')

@section('content')
   <div class="row text-left">
        <div class="col-lg-9 col-offset-3">
            <div class="card">
                <div class="card-header">
                    <strong>Хэрэглэгчийн</strong> Мэдээлэл
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

                       <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">ID</label>
                            </div>
                            <div class="col-12 col-md-9">                                                                
                                <span class="help-block">{{ $customer->id }}</span>
                               
                            </div>
                        </div>
                    
                    
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Гарчиг</label>
                            </div>
                            <div class="col-12 col-md-9">                                                                
                                <span class="help-block">{{ $customer->title }}</span>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Дугаар</label>
                            </div>
                            <div class="col-12 col-md-9">                                                                
                                <span class="help-block">{{ $customer->phone }}</span>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Имэйл хаяг</label>
                            </div>
                            <div class="col-12 col-md-9">                                                                
                                <span class="help-block">{{ $customer->email }}</span>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Зурвас</label>
                            </div>
                            <div class="col-12 col-md-9">                                                                
                                <span class="help-block">{{ $customer->text }}</span>
                               
                            </div>
                        </div>
                        
                            
                       <div class="row form-group">
                            <div class="col-6 col-md-6">
                               <a href="{{ route('customer.index')}}" class="btn btn-primary btn-sm btn-block">
                                <i class="fa fa-dot-circle-o"></i>&nbsp;Буцах&nbsp;
                              </a>
                            </div>
                            <div class="col-6 col-md-6">                                                             
                                <form action="{{ route('customer.destroy', $customer->id)}}" method="post">
                          
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}

                                  <button type="submit" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Устгах</button>
                              </form>
                               
                            </div>
                        </div>
                
                      

                       
                   
               
                   
                </div>
            </div>
        </div>
    </div>
@endsection