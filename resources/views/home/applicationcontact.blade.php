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
        @include('homeinclude.topbanner')
    {{-- TOP BANNER END --}}
   
    {{-- ABOUT US --}}
        @include('homeinclude.applicationcontact')
    {{-- ABOUT US END --}}
    {{-- FOOTER --}}
        @include('homeinclude.footer')
    {{-- FOOTER END --}}
@endsection