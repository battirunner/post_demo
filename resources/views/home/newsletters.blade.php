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
        .content-item img{ width: 150px; height: 185px}
        .content{margin-left: 1vw;}
        .content-item{padding-bottom: 12px; margin-bottom: 20px;}
        .newsletter{width: 300px; height: 175px; overflow: hidden; margin-left:0px; padding-right: 40px;}
    </style>
@endsection

@section('content')
    {{-- TOP NAVBAR --}}
        @include('homeinclude.topnavbar')
    {{-- TOP NAVBAR END --}}
    {{-- TOP BANNER --}}
        @include('homeinclude.topbanner')
    {{-- TOP BANNER END --}}
   
    <div class="all-post content">
                    <div class="content">
                        <div class="row">
                            <!-- @vforeach( $ pos ts as $ p ost) -->
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-item">
                                        <a href="#"><h5 class="content-header"> jsdnjnsdj </h5></a>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <a href="#"><img src="/assets/images/man1.jpg" class="img-responsive"></a>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="newsletter text-justify">
                                                    1kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx.
                                                </div>
                                                <div>
                                                    <a href="shownewsletter">{{__('Read more')}}</a>
                                                </div>
                                            </div>
                                        </div>
 
                                        <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                                    </div>
                                </div> 
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-item">
                                        <a href="#"><h5 class="content-header"> jsdnjnsdj </h5></a>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <a href="#"><img src="/assets/images/man1.jpg" class="img-responsive"></a>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="newsletter text-justify">
                                                    kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasdas
                                                </div>
                                                <div>
                                                    <a href="shownewsletter">{{__('Read more')}}</a>
                                                </div>
                                            </div>
                                        </div>
 
                                        <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                                    </div>
                                </div> 
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-item">
                                        <a href="#"><h5 class="content-header"> jsdnjnsdj </h5></a>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <a href="#"><img src="/assets/images/man1.jpg" class="img-responsive"></a>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="newsletter text-justify">
                                                    kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasdas
                                                </div>
                                                <div>
                                                    <a href="shownewsletter">{{__('Read more')}}</a>
                                                </div>
                                            </div>
                                        </div>
 
                                        <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                                    </div>
                                </div> 

                            <!-- @ endfo reach -->
                            
                        </div>
                    </div>
                </div>
    {{-- FOOTER --}}
        @include('homeinclude.footer')
    {{-- FOOTER END --}}
@endsection