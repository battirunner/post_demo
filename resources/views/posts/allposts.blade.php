@extends('layouts.layout')

@section('extraCSS')
    <style>
        .poster-nameplate
        {
            background-color: rgb(13,87,3);
        }
        .poster-nameplate h3
        {
            background-color: white;
            color: green;
        }
        .apb-holder li 
        {
            display: inline-block;
        }
        .apb-holder li img
        {
            height:40px;
            width: auto;
        }
        
         
    </style>
     <script>
      function area_name(){ 
                
                    var obj1 =  ["ALL AREA","霧島・姶良", "鹿児島", "大隅・鹿屋", "宮崎・都城","県外のお仕事" ];
                    var code = document.getElementById("area_code");
                    document.getElementById("area_name").innerHTML = obj1[code.value]+"エリア";
                    }
     function ready() {
    addEventListener("load", area_name);


    
  }
 
  document.addEventListener("DOMContentLoaded", ready);
            </script>
@endsection

@section('content')
    {{-- TOP NAVBAR --}}
        @include('homeinclude.topnavbar')
    {{-- TOP NAVBAR END --}}
    {{-- TOP BANNER --}}
       
    {{-- TOP BANNER END --}}
    {{-- BANNER --}}
    
    {{-- BANNER END --}}
                <div class="container">
                    @if(request('location'))
                        <input type="hidden" id="area_code"  value="{{request('location')}}">
                        <h4 id="area_name" style="color:white;background-color: green;padding:10px;margin-top:0px;width:400px;border-radius:15px;" ></h4>
                    @else
                        <h4 id="area_name" style="color:white;background-color: green;padding:10px;margin-top:0px;width:400px;border-radius:15px;" >{{__('Post For All Area')}}</h4>
                    @endif
                    <ul class="apb-holder">
                        <a href="/allposts?location=1"><li class="all-post-btn"> <img src="/assets/images/TOP03.png" class="img-responsive"> </li></a>
                        <a href="/allposts?location=2"><li class="all-post-btn"> <img src="/assets/images/TOP05.png" class="img-responsive"> </li></a>
                        <a href="/allposts?location=3"><li class="all-post-btn"> <img src="/assets/images/TOP07.png" class="img-responsive"> </li></a>
                        <a href="/allposts?location=4"><li class="all-post-btn"> <img src="/assets/images/TOP13.png" class="img-responsive"> </li></a>
                        <a href="/allposts?location=5"><li class="all-post-btn"> <img src="/assets/images/TOP15.png" class="img-responsive"> </li></a>
                        <!-- <li class="all-post-btn"> 
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
                        </li> -->
                    </ul>
                    <ul class="apb-holder">
                        <li class="all-post-btn"> 
                            <span class="search">
                                <input type="text" id="free_words" class="searchTerm" placeholder="フリーワード検索">
                                <a href="" id="url_1" style="color:white;">
                                <button type="submit" class="searchButton" onclick="myf()">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </a>
                            </span>
                        </li>
                        <li class="all-post-btn">
                                <span class="search">
                                    <!-- <input type="text" class="searchTerm" placeholder="What are you looking for?"/>
                                    <a href="search" style="color:white;">
                                    <button type="submit" class="searchButton">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    </a> -->
                                    <a href="search{{request('location')?'?location='.request('location'): '' }}" style="color:white;">
                                        <button type="submit" class="btn btn-success btn-lg home-ban-btn" style="background-color: rgb(0,112,49);width: 150px;">
                                            {{__('All Options')}}
                                            <span class="glyphicon glyphicon-search" style="padding:0 0 0 5px;"></span>
                                        </button>
                                    </a>
                                </span>
                        </li>
                    </ul>
                </div>
    {{-- POST CONTENT AREA --}}
        @include('homeinclude.postcontentarea')
    {{-- POST CONTENT AREA END --}}
    {{-- FOOTER --}}
        @include('homeinclude.footer')
    {{-- FOOTER END --}}
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
                }
            </script>

           
    @endsection



