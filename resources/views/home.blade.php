@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@push('style')
    <style>
        .font-icon-detail{
            font-size:4rem;
        }
    </style>
    
@endpush

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="container">
            <h4 class="">Maestros</h4>
            <hr class="w-25 ml-0">
            <div class="row justify-content-around">
                                
                <div class="col-lg-3">
                    <a href="">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-category"></div>
                                <div class="card-title">
                                    <div class="font-icon-detail text-center">
                                        <i class="now-ui-icons business_globe"></i>                  
                                    </div>
                                    <h3 class="text-center font-weight-bold">PRODUCTOS</h3>
                                </div>
                                
                            </div>
                            <div class="card-body"></div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-category"></div>
                                <div class="card-title">
                                    <div class="font-icon-detail text-center">
                                        <i class="now-ui-icons business_globe"></i>                  
                                    </div>
                                    <h3 class="text-center font-weight-bold">MAQUINAS</h3>
                                </div>
                                
                            </div>
                            <div class="card-body"></div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-category"></div>
                                    <div class="card-title">
                                        <div class="font-icon-detail text-center">
                                            <i class="now-ui-icons business_globe"></i>                  
                                        </div>
                                        <h3 class="text-center font-weight-bold">PAROS</h3>
                                    </div>
                                    
                                </div>
                                <div class="card-body"></div>
                                
                            </div>
                        </a>
                </div>
            </div>
            <hr>
            
        </div>
        <div class="container">
            <h4 class="col-12">Entrada de Datos</h4>
            <hr class="w-25 ml-0">
            <div class="row justify-content-around">             
                
                <div class="col-lg-3">
                    <a href="">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-category"></div>
                                    <div class="card-title">
                                        <div class="font-icon-detail text-center">
                                            <i class="now-ui-icons business_globe"></i>                  
                                        </div>
                                        <h3 class="text-center font-weight-bold">PRODUCCIÓN</h3>
                                    </div>
                                    
                                </div>
                                <div class="card-body"></div>
                                
                            </div>
                        </a>
                </div>
                <div class="col-lg-3">
                    <a href="">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-category"></div>
                                    <div class="card-title">
                                        <div class="font-icon-detail text-center">
                                            <i class="now-ui-icons business_globe"></i>                  
                                        </div>
                                        <h3 class="text-center font-weight-bold">TIEMPOS</h3>
                                    </div>
                                    
                                </div>
                                <div class="card-body"></div>
                                
                            </div>
                        </a>
                </div>
            </div>
        </div>
        
        
    </div>

@endsection