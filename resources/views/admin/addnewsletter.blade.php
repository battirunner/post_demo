
@extends('layouts.logreglayout')
@section('extraCSS')
<style>
    .green{min-width: 650px!important;}
    .blue{min-width: 180px!important;}
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
                        {{-- <a class="nav-link nav-link-custom" style="color:white;" href="#">Admin Login</a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" style="color:white;" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row content">
          
        @include('admin.partials.sidenav')

        <div class="col-sm-9">
          <form action="{{route('admin.addnewsletter')}}" method="POST">
            @csrf
            <h4> &nbsp &nbsp {{__('Contact from companies')}} </h4>
            <table class="content table table-bordered nltable">
            <!-- <tr>
            <td class="blue"> {{__('News')}} </td>
            <td class="green">  <input type="text" name="news_title" value="" required style="width:100%;">  </td>
            </tr> -->
            <!-- <tr>
            <td class="blue"> {{__('Date')}} </td>
            <td class="green"> <input type="date" id='datetimepicker1' name="news_date" value="" style="width:100%;"> </td>
            </tr> -->

            <tr>
            <td class="blue"> {{__('Title')}}</td>
            <td class="green"> <input type="text" name="main_title" value="" required style="width:100%;"> </td>
            </tr>
                            
            {{-- <tr rowspan="5">
                <td colspan="12">
                    <input type='file' id="bannerInput" name="banner_image"  required />
                        <img id="banner" src="#" alt="your image" style="height:auto;width:1000px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
                </td>
            </tr> --}}

            <tr rowspan="3">
            <td class="blue">{{__('Comment')}} </td>
            <td class="green"> <textarea row="7" type="text"  id="mytextarea" name="mytextarea" value="" style="width:100%; border-radius: 6px;"></textarea> </td>
            </tr>
            <input name="image[]" style="visibility:hidden;" type="file" id="upload" class="hidden" onchange="">
            <tr rowspan="3">
                <td class="green wid12" colspan="2">
                    <button class="btn btn-danger btn-lg" type="submit" style="margin-left: 40%; width: 300px;"> {{__('Submit')}} </button> 
                </td>    
            </tr>
            </table>
          </form>
          <br/><br/>
          <script src="https://cdn.tiny.cloud/1/35um559xu11tzdnitdu7xapp9l3qe0wynymde7jvvqw1t6hi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
          <script>
            tinymce.init({
              selector: '#mytextarea',
              image_advtab: true,
              file_picker_callback: function(callback, value, meta) {
                if (meta.filetype == 'image') {
                  $('#upload').trigger('click');
                  $('#upload').on('change', function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                      callback(e.target.result, {
                        alt: ''
                      });
                    };
                    reader.readAsDataURL(file);
                  });
                }
              }, 
              height: 500,
            menubar: false,

            plugins: [
              'advlist autolink lists link image charmap print preview anchor',
              'searchreplace visualblocks code fullscreen',
              'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | code alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image | removeformat | help',
              inline_styles : true,
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tiny.cloud/css/codepen.min.css'
              ]
            });
          </script>
        </div>
      </div>
    </div>
        
    @include('admin.partials.footer')
        

@endsection

@section('extraJS')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
        function myFunction() {
           var element = document.getElementById("navbarSupportedContent");
           element.classList.toggle("collapse");
        }
    
    function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    
                        // alert("check3");
                        $('#banner').attr('src', e.target.result);
                    
                }

                reader.readAsDataURL(input.files[0]);

            }            
        }
        $("#bannerInput").change(function() {
            readURL(this);
        });
</script>
@endsection