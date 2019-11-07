
@extends('layouts.logreglayout')

@section('extraCSS')

<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 80vh;
    }
    
    /* Set black background color, white text and some padding */
    footer {
        /* position: absolute; */
        bottom: 0px;
      background-color: #555;
      color: white;
      padding: 15px;
      height: 10vh;
    }
    .sidenav-custom li {
        padding: 5px;
        border: solid whitesmoke 2px;
        background-color: gray;
        color: white;
        text-align: center;

    }
    .sidenav-custom-2 li {
        padding: 5px;
        /* background-color: gray; */
        color: white;
        text-align: center;
    }
    .sidenav-custom .active {
        color: red;
        background-color: whitesmoke;
    }

    .sidenav-custom li a {
        width: 100%;
        padding: 5px;
        color: white;
      

    }
    .page-2{margin-top: 10px;}
    .table{width: 100%;}
    .table tr td {
            padding: 5px;
            border: 3px solid #222!important

        }
    .wid1{
            width: 200px;
            background-color: rgb(0, 109, 47);
            color: white;
        }
    .wid2{width: 15%;}
    .wid4{
            width: 35%;
            background-color: bisque;
        }
    .wid8{width: 70%;}
    .wid12{width: 100%;}
    input {width: 100%; padding: 0px;}

    label {
        display: block;
        padding-left: 15px;
        text-indent: -15px;
    }
    .option-list {
        padding-left:20px;
    }
    .option-list label input {
        width: 13px;
        height: 13px;
        padding: 0;
        margin:0;
        vertical-align: bottom;
        position: relative;
        top: -5px;
        *overflow: hidden;
    }
    .checkbox-header {
        /* position: absolute; */
        background:rgb(0, 109, 47);
        width:100%;
        padding: 10px;
        color: white;


    }
    .checkbox-optionlist {
        border-top: 2px solid black;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        border-left: 2px solid black;        
        /* height:300px; */
        padding-left: 0;
        padding-right: 0;
    }
    .tag-input-area{
        border: 2px solid black;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 15px;
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
        border: 2px solid green;
    }

    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
</style>

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
                <h3>Edit Post with ID = {{request('id')}}</h3>
                @include('partials.success') 
                <!-- <h4>Leave a Comment:</h4> -->
                <form role="form" action="{{route('admin.editpost')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                        <!-- <div class="form-group">
                            {{-- <textarea class="form-control" rows="3" required></textarea> --}}
                            <img src="/assets/images/TOP_backgroundimg_sample.png" alt="">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button> --> 
                    @include('admin.edit.editpostinfoinput')
                    @include('admin.edit.editpostcheckoptions')
                    <div class="form-group tag-input-area">
                        <label for="city_tag">write something and press enter to convert into tag</label>
                        <input type="text" name="tag_words" value="{{$tag_word_list}}" data-role="tagsinput" class="form-control" id="special-input" />
                    </div>
                    <!-- <div class="form-group tag-input-area">
                        <label for="city_tag">write something and press enter to convert into tag</label>
                        <input type="text" name="tag_words" value="" class="form-control" id="checkbox-input" />
                    </div> -->
                    <div class="row" style="padding: 10px;">
                        <button class="btn btn-primary btn-lg btn-block" type="submit"> {{__('Submit')}}</button>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
        
    @include('admin.partials.footer')
    <!-- <footer class="container-fluid" style="position:relative;">
        <p>Footer Text</p>
    </footer> -->
        

@endsection

@section('extraJS')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
     // Material Select Initialization
        function myFunction() {
            var element = document.getElementById("navbarSupportedContent");
            element.classList.toggle("collapse");
        }
        function deletecheck() {
           return confirm("Do you want to delete?")
        }
        function readURL(input, field) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if( field == 1) {
                        $('#avatar').attr('src', e.target.result);
                    }
                    if( field == 2){
                        $('#banner').attr('src', e.target.result);
                    }

                    
                }

                reader.readAsDataURL(input.files[0]);

            }            
        }

        $("#avatarInput").change(function() {
            readURL(this,field = 1);
        });
        $("#bannerInput").change(function() {
            readURL(this,field = 2);
        });
        var inputF = document.getElementById("checkbox-input");
        $('#option1').change(function(){
            alert("sdf");
            
        });
        // function tags() {
        //     alert("sdf");
        //     inputF.value="sdf,sdfu";
        // }


        // document.getElementById("special-input").value="sdf,yuyuti";
    </script>

@endsection