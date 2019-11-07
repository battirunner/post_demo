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
             
        </style>
    @endsection

    @section('content')
        {{-- TOP NAVBAR --}}
            @include('homeinclude.topnavbar')
        {{-- TOP NAVBAR END --}}
        {{-- TOP BANNER --}}
        {{-- @include('homeinclude.topbanner') --}}    
        {{-- TOP BANNER END --}}
        {{-- BANNER --}}
            @include('homeinclude.banner')
        {{-- BANNER END --}}
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
                var location_id= document.getElementById("location"); 
                var hlink = document.getElementById("url_1");
                var url = location.pathname+location.search+'/allposts?words='+check.value;
                function myf()
                {
                    // alert(location.pathname+location.search+'&&words='+check.value);
                    hlink.setAttribute('href', location.pathname+location.search+'allposts?locations='+location_id.value+'&words='+check.value);
                }

                function bannercheck()
                {
                    alert("sdfg");
                }
            </script>
    @endsection


    
    