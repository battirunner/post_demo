
@extends('layouts.logreglayout')
@section('extraCSS')
<style>
    .green{min-width: 650px!important;}
    .blue{min-width: 180px!important;}
</style>
@endsection


@section('content')
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#"><i><img src="/assets/images/TOP44.png" style="width:120px; height: 90px;" alt=""></i> </a>
            <button onclick="myFunction()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        {{-- <a class="nav-link nav-link-custom" style="color:white;" href="#">{{__('Admin Login')}}</a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" style="color:white;" href="{{route('logout')}}">{{__('Logout')}}</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            @include('admin.partials.sidenav')
            <div class="col-sm-9">
                <form action="{{route('admin.addpricelist')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                    <h4> &nbsp &nbsp {{__('Upload Home Image')}} </h4>
                    <table class="content table table-bordered nltable">
                    <tr rowspan="5">
                        <td colspan="12">
                            <input type='file' id="homebannerInput" name="home_image"   />
                            <img id="homebanner" src="/storage/uploads/others/{{auth()->user()->home_image}}" alt="your image" style="height:auto;width:1000px;" onerror=this.src="/storage/others/TOP_backgroundimg_sample.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h4>{{__('Upload Price List Image')}}</h4>
                        </td>
                    </tr>
                    <!-- <h4> &nbsp &nbsp  </h4> -->
                    <!-- <table class="content table table-bordered nltable"> -->
                    <tr rowspan="5">
                        <td colspan="12">
                            <input type='file' id="bannerInput" name="price_image"   />
                            <img id="banner" src="/storage/uploads/others/{{auth()->user()->price_image}}" alt="your image" style="height:auto;width:1000px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <h4>{{__('For Mobile View')}}</h4>
                        </td>
                    </tr>
                    <tr rowspan="5">
                        <td colspan="12">
                            <input type='file' id="mobileInput" name="price_image_mob" />
                            <img id="mobile" src="/storage/uploads/others/{{auth()->user()->price_image_mobile}}" alt="your image" style="height:auto;max-width:400px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
                        </td>
                    </tr>
                    <tr rowspan="3">
                        <td class="green wid12" colspan="2">
                            <button class="btn btn-danger btn-lg" type="submit" style="margin-left: 40%; width: 300px;"> {{__('Submit')}}</button> 
                        </td>    
                    </tr>
                    </table>
                </form>
                <br/><br/>
            </div>
        </div>
    </div>
        
    @include('admin.partials.footer')
        

@endsection

@section('extraJS')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
        function myFunction() {
           var element = document.getElementById("navbarSupportedContent");
           element.classList.toggle("collapse");
        }
    
    function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if( field == 1) {
                        $('#homebanner').attr('src', e.target.result);
                    }
                    if( field == 2){
                        $('#banner').attr('src', e.target.result);
                    }
                    if( field == 3){
                        $('#mobile').attr('src', e.target.result);
                    }

                    
                }

                reader.readAsDataURL(input.files[0]);

            }            
        }
        $("#homebannerInput").change(function() {
            readURL(this,field=1);
        });
        $("#bannerInput").change(function() {
            readURL(this,field=2);
        });
        $("#mobileInput").change(function() {
            readURL(this,field=3);
        });
</script>
@endsection