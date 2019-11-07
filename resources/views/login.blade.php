
@extends('layouts.logreglayout')

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
                        <a class="nav-link nav-link-custom" style="color:white;" href="{{route('register')}}">{{__('Add New Admin')}}</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{__('Admin Login')}}</div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                @include('partials.errors')
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">{{__('Admin ID')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{__('Password')}}</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <!-- <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('Login')}}
                                    </button>
                                    <!-- <a href="#" class="btn btn-link">
                                        Forgot Your Password?
                                    </a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('extraJS')
        <script>
        function myFunction() {
           var element = document.getElementById("navbarSupportedContent");
           element.classList.toggle("collapse");
        }
        </script>
        
@endsection