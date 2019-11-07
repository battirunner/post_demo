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
        .content-item img{ width: 86%; height: auto;}
        .content{margin-left: 1vw; padding: 16px 7%!important; }
        .content-item{padding-bottom: 12px; margin-bottom: 20px; border: 0px;}
        .newsletter{ width: 86%; overflow: wordwrap; font-size: 16px;}
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
                                <!-- <div class="nl-image">
                                    <a href="#"><img src="/assets/images/man1.jpg" class="img-responsive"></a>
                                </div> -->
                                <h1> {{$news->main_title}} </h1>
                                <!-- <h4>{{$news->newsletter_heading}}</h4> -->
                                {!! $news->newsletter_content !!}
                                <div class="nl-info">
                                    <!-- <div class="newsletter text-justify">
                                        kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx. asd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd.
                                        <br/>kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx. asd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd.
                                        <br/>kasd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd. as opoowe nmmnnn zxzx. asd mkaskd mdasass dada. dnasd adjasndas dajsdjasda sdasjd jas dj as as djasdjasdj asjd asjd. jsadjasjd asd janfrierngtjg tegktrgkerjg rgjermw fekfjdnjqnjd qj wnjeqwje qfnwejje asdasdh ad asdjasd.

                                    </div> -->

                                </div>
                            </div>
                            <div style="padding-top:50px;">
                                <h4 style="floar:left;text-align:left;">{{__('Older Newsletters')}}</h4>
                                <ul style="float:left;list-style:none;">
                                    @foreach($newsletters as $newsletter)
                                        <a href="shownewsletter?id={{$newsletter->id}}"><li>{{$newsletter->main_title, $newsletter->newsletter_heading}} .....{{$newsletter->created_at}}</li></a>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                        </div>
                        <!-- <div>
                        <h4>{{__('Older Newsletters')}}</h4>
                        <ul style="float:left;list-style:none;">
                        @foreach($newsletters as $newsletter)
                            <a href="shownewsletter?id={{$newsletter->id}}"><li>{{$newsletter->main_title, $newsletter->newsletter_heading}}{{$newsletter->created_at}}</li></a>
                        @endforeach
                        </ul>
                        </div> -->
                               

                            <!-- @ endfo reach -->
                            
                        </div>
                    </div>
                </div>
    {{-- FOOTER --}}
        @include('homeinclude.footer')
    {{-- FOOTER END --}}
@endsection