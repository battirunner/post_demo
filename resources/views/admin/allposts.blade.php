
@extends('layouts.logreglayout')
@section('extraCSS')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#"><i><img src="/assets/images/TOP44.png" alt=""></i> </a>
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
            <div class="col-sm-9 col-xs-9">
                <div class="container">
                    
                    <ul class="apb-holder">
                        <a href="/admin/allposts?location=1"><li class="all-post-btn"> <img src="/assets/images/TOP03.png" class="img-responsive"> </li></a>
                        <a href="/admin/allposts?location=2"><li class="all-post-btn"> <img src="/assets/images/TOP05.png" class="img-responsive"> </li></a>
                        <a href="/admin/allposts?location=3"><li class="all-post-btn"> <img src="/assets/images/TOP07.png" class="img-responsive"> </li></a>
                        <a href="/admin/allposts?location=4"><li class="all-post-btn"> <img src="/assets/images/TOP13.png" class="img-responsive"> </li></a>
                        <a href="/admin/allposts?location=5"><li class="all-post-btn"> <img src="/assets/images/TOP15.png" class="img-responsive"> </li></a>
                        <li class="all-post-btn"> 
                                <span class="search">
                                    <input type="text" id="free_words" class="searchTerm" placeholder="What are you looking for?">
                                    <button type="submit" class="searchButton" onclick="myf()">
                                        <a href="" id="url_1"><span class="glyphicon glyphicon-search"></span></a>
                                    </button>
                                </span>
                        </li>
                        <li class="all-post-btn">
                                <span class="search">
                                    <input type="text" class="searchTerm" placeholder="What are you looking for?"/>
                                    <button type="submit" class="searchButton">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                        </li>
                    </ul>
                </div>
                @include('partials.success')
                <div class="all-post content">
                    <div class="content">
                        @if(request('location'))
                        <h4>{{__('Posts For Area')}} {{request('location')}}</h4>
                        @else
                        <h4>{{__('Posts For All Area')}}</h4>
                        @endif
                        <div class="row">
                            @foreach($posts as $post)
                                
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="content-item">
                                        <a href="{{route('viewpost',$post->id)}}"><h5 class="content-header"> {{$post->company_name}} </h5></a>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <a href="{{route('viewpost',$post->id)}}"><img src="/storage/uploads/avatar/{{$post->avatar}}" class="img-responsive"></a>
                                            </div>
                                            <div class="col-xs-5">
                                                <div style="width: 250px; overflow: hidden; margin-left:3%;">
                                                    {{$post->admin_infoA}}<br/>
                                                    {{$post->admin_infoB}}<br/>
                                                    {{$post->admin_infoC}}<br/>
                                                    {{$post->admin_infoD}}<br/>
                                                    {{$post->admin_infoE}}<br/>
                                                    {{$post->admin_infoF}}
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 95%!important">
                                            <!-- <a class="btn btn-info" href=""> <b style="font-size:18px;">&#9990;</b> {{__('Call')}}</a>
                                            <a class="btn btn-info" href=""> <b style="font-size:18px;">&#9993;</b> {{__('Mail')}}</a> -->
                                            <a href="/admin/editpost?id={{$post->id}}" class="btn btn-info"> {{__('Edit Post')}} </a>
                                            <a class="btn btn-danger" style="float: right;" href="deletepost/{{$post->id}}"> {{__('Delete')}} </a>
                                            @if($post->active_status)
                                            <a class="btn btn-danger" style="float: right; margin-right: 5px;" href="postaction/{{$post->id}}"> {{__('Block')}} </a>
                                            @elseif(!$post->active_status)
                                            <a class="btn btn-success" style="float: right; margin-right: 5px;" href="postaction/{{$post->id}}"> {{__('Active')}} </a>
                                            @endif       
                                        </div>
                                        <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                                    </div>
                                </div> 

                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="pagination-section">
                    {{$posts->links()}}
                </div>                 
            </div>
        </div>
    </div>
        
    @include('admin.partials.footer')
        

@endsection

@section('extraJS')
        
        <script>
        var check = document.getElementById("free_words"); 
        var hlink = document.getElementById("url_1");
        var str = location.pathname+location.search;
        
        var location_cat = get('location');
        var words = get('words');
        function get(name)
        {
            if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
            return decodeURIComponent(name[1]);
        }
        if(location_cat)
        {
            var url =location.pathname+'?location='+location_cat+'&words='+check.value;
        }
        else if(words)
        {

            var url =location.pathname+'?location='+'&words='+check.value;
        }
        else
        {
            var url = location.pathname+'?location='+'&words=';
        }
        function myf()
        {
            // alert(location.pathname);
            // alert(url+check.value);
            hlink.setAttribute('href', url+check.value);
            hlink.click();
        }
        function myFunction() {
           var element = document.getElementById("navbarSupportedContent");
           element.classList.toggle("collapse");
        }
        </script>
        
@endsection