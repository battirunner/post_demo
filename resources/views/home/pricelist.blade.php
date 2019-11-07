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
        .content-item img{ width: 100%; height: auto;}
        .content{margin-left: 1vw; padding: 16px 7%!important; }
        .content-item{padding-bottom: 12px; margin-bottom: 20px; border: 0px;}
        .newsletter{ width: 86%; overflow: wordwrap; font-size: 16px;}
        #cont-img-web{display: block;}
        #cont-img-mob{display: none;}
        @media only screen and (max-width: 425px) {
            .menu{margin-top: 15px;}
            #cont-img-mob{display: block;}
        #cont-img-web{display: none;}
        }
    </style>
@endsection

@section('content')
    {{-- TOP NAVBAR --}}
        @include('homeinclude.topnavbar')
    {{-- TOP NAVBAR END --}}
   
    <div class="all-post content">
                    <div class="content">
                        <div class="content-item">
                            <div>
                                <h3> {{__('Price List')}} </h3>
                                <div class="nl-image">
                                    <a href="#" id="cont-img-web"><img src="/storage/uploads/others/{{$admin_info->price_image}}" class="img-responsive" ></a>
                                    <a href="#" id="cont-img-mob"><img src="/storage/uploads/others/{{$admin_info->price_image_mobile}}" class="img-responsive"></a>
                                </div>
                                

                                <!-- <div class="nl-info">
                                    <div class="newsletter text-justify">
                                        kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx. asd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd.
                                        <br/>kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx. asd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd.
                                        <br/>kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx. asd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd.

                                    </div>
                                </div> -->
                            </div>

                            <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                        </div>
                          
                               

                            <!-- @ endfo reach -->
                            
                        </div>
                    </div>
                </div>
    {{-- FOOTER --}}
        @include('homeinclude.footer')
    {{-- FOOTER END --}}
@endsection