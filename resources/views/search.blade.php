@extends('layouts.layout')

@section('extraCSS')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">

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
        .tag-input-area{
        margin-bottom: 5px;
        padding: 2px 15px;
    }
    .label-info{
        background-color: rgb(0, 109, 47);
        padding: 5px;
        border-radius: 5px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .tag-input-field{
        padding: 10px;
        width: 100%;
        border: 2px solid green;
    }
    .option-list{display: inline-block; margin: 0px 8px; }
    .bootstrap-tagsinput input{min-width: 340px!important;}
    .checkbox-optionlist{ border: 1px solid #111; padding: 0px;}
    .checkbox-optionlist b{ background: #171; color: #fff; padding: 5px 10px; margin-top: 0px; margin-bottom: 15px; font-size: 14px;}
    .search input{height: 33px;}
    .search button{height: 33px;}
    .multi-search-btn{padding-left: 80px;}
    @media screen and (max-width: 767px) {
        .tag-input-area{
        margin-bottom: 5px;
        padding: 2px;}
       .menu{margin-top: 15px;}
       .multi-search-btn{padding-left: 8px;}

    }

    </style>
   @endsection

@section('content')
    {{-- TOP NAVBAR --}}
        @include('homeinclude.topnavbar')
    {{-- TOP NAVBAR END --}}
    {{-- TOP BANNER --}}
       
    {{-- TOP BANNER END --}}
    {{-- BANNER --}}
    
    {{-- BANNER END --}}
            <form action="{{route('search')}}" method="POST" style="margin-left: -20px">
            @csrf
                <div class="container">       
                    <ul class="content">
                        <div class="row">
                            <div class ="col-md-2 col-xs-12 form-group">  
                                <label for="city_tag">{{__('Chooese Location')}}</label>
                                <select name="location" id="location" class="form-control">
                                    <option value=""> {{__('All')}} </option>
                                    <option value="1" {{ request('location')==1 ? 'selected': '' }}> 霧島・姶良 </option>
                                    <option value="2" {{ request('location')==2 ? 'selected': '' }}> 鹿児島 </option>
                                    <option value="3" {{ request('location')==3 ? 'selected': '' }}> 大隅・鹿屋 </option>
                                    <option value="4" {{ request('location')==4 ? 'selected': '' }}> 宮崎・都城 </option>
                                    <option value="5" {{ request('location')==5 ? 'selected': '' }}> 県外のお仕事 </option>
                                </select> 
                            </div>
                            <div class ="col-md-3 col-xs-12">
                                <label for="city_tag"></label>
                                <span class="search">
                                    <input type="text" id="free_words" name="free_words" value="{{request('words')}}" class="searchTerm" placeholder="フリーワード検索">
                                    <a href="" id="url_1">
                                    <button type="submit" class="searchButton" onclick="myf()">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    </a>
                                </span>
                            </div>
                            <!-- <div class="col-md-5 col-xs-9">
                                <div class="form-group tag-input-area">
                                    <label for="city_tag">{{__('write something and press enter')}}</label>
                                    <input type="text" name="tag_words" value="" data-role="tagsinput" class="form-control" id="special-input" />
                                </div>
                            </div> -->
                            <div class="col-md-2 col-xs-3 multi-search-btn">
                            <br/>
                                <button type="submit" class="btn btn-success btn-block"> {{__('Search')}} </button>
                            </div>
                        </div><br/>

                    </ul>
                    
                </div>
                <div class="content" style="padding-left: 30px;">
                    @include('search.checkboxsearch')
                </div>
            </form>
    {{-- POST CONTENT AREA --}}
        @include('homeinclude.postcontentarea')
    {{-- POST CONTENT AREA END --}}
    {{-- FOOTER --}}
        @include('homeinclude.footer')
    {{-- FOOTER END --}}
@endsection
@section('extraJS')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
            <script>
                 
                // var check = document.getElementById("free_words"); 
                var hlink = document.getElementById("url_1");
                var str = location.pathname+location.search;
                
                // var location_cat = get('location');
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
                function myf()
                {
                    // alert(location.pathname);
                    // alert(url+check.value);
                    // hlink.setAttribute('href', url+check.value);

                    var check = document.getElementById("free_words");
                var location_id = document.getElementById("location"); 

                    hlink.setAttribute('href', location.pathname+'?location='+location_id.value+'&words='+check.value);
                }
            </script>
    @endsection



