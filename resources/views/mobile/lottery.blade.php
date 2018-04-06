@extends('mobile.master')

@section('content')        
            
        <div class="all-elements">

                @include ('mobile.sidebar')
        
            <div id="content" class="page-content">
        
                @include ('mobile.nav')
                        
            <div>

                    <div id="ctl00_UpdatePanel1">
                         
                        <div class="container bg-dark">
                            <h2>Lottery</h2>
                    
                            <div class="row product-wrap margin-none-side">
                                <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                    <div class="col-md-12 padding-style6">
                                        <img src="{{ asset('mobile/images/common/product/rollex.jpg') }}" class="img-responsive width-full" />
                                    </div>
                                    <div class="col-md-12 download-wrap">
                                        <button type="button" class="btn btn-warning btn-block"><i class="fa fa-html5"></i>play now</button>
                                    </div>
                                </a>
                            </div>
                    
                        </div>
                    
                    </div>

        <div id="ctl00_UpdateProgress1" style="display:none;">
            
        <div class="overlay" />
                    <div class="overlayContent">
                        <img src="{{ asset('mobile/images/ajax-loader.gif') }}" alt="Loading" border="1" />
                    </div>
            
        </div>
            </div>
        
            @include ('mobile.footer')
                            
            </div>  
            
        </div>

@endsection