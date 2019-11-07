
@extends('layouts.logreglayout')
@section('extraCSS')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    
            <div class="col-sm-9">
                
                <h3>{{__('Newsletters')}}</h3>
                @include('partials.success')
                <!-- <button class="btn btn-primary" style="float:right;" >Edit List</button> -->
                <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>  -->
                <!-- <form action="{{route('admin.editpostorder')}}" method="POST" onsubmit="return confirm('sure want to change order?');"> -->
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Title')}}</th>
                            <th>{{__('Date')}}</th>
                            <th>{{__('Edit')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newsletters as $newsletter)
                        <tr>
                            <td><a href="/shownewsletter?id={{$newsletter->id}}">{{$newsletter->id}}</a></td>
                            <td><a href="/shownewsletter?id={{$newsletter->id}}">{{$newsletter->main_title}}</a></td>
                            <td>{{$newsletter->created_at}}</td>
                            <td>
                                <a href="/admin/newsletters?edit={{$newsletter->id}}" class="btn btn-primary">{{__('Edit')}}</a>
                                
                                <a href="/admin/newsletters?delete={{$newsletter->id}}" class="btn btn-danger" >{{__('Delete')}}</a>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <!-- <button type="submit" class="btn btn-info" style="float:right;" >{{__('Edit Post Order')}}</button> -->
                <!-- </form> -->
                <div class="pagination-section">
                    {{$newsletters->links()}}
                </div>
                <div class="row">
                    @if(request('edit'))  
                    <div class="col-sm-9">
                        <form action="{{route('admin.addnewsletter')}}" method="POST">
                            @csrf
                            <h4> &nbsp &nbsp {{__('Contact from companies')}} </h4>
                            <table class="content table table-bordered nltable">
                            <tr>
                            <td class="blue"> {{__('Title')}}</td>
                            <td class="green"> <input type="text" name="main_title" value="{{$newsletter_edit->main_title}}" style="width:100%;"> </td>
                            </tr>
                                            
                            {{-- <tr rowspan="5">
                                <td colspan="12">
                                    <input type='file' id="bannerInput" name="banner_image"  required />
                                        <img id="banner" src="#" alt="your image" style="height:auto;width:1000px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
                                </td>
                            </tr> --}}

                            <tr rowspan="3">
                            <td class="blue">{{__('Comment')}} </td>
                            <td class="green"> <textarea row="7" type="text"  id="mytextarea" name="mytextarea" value="" style="width:100%; border-radius: 6px;"> asdnsdaj</textarea> </td>
                            </tr>
                            <input name="id" style="visibility:hidden;" value="{{$newsletter_edit->id}}" type="text" class="hidden" onchange="">
                            <input name="content_edit" id="content_edit" style="visibility:hidden;" value="{{$newsletter_edit->newsletter_content}}" type="text" class="hidden" onchange="">
                            
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
                            
                            //THis is the function to show preloaded content in tinymce
                            var content = document.getElementById('content_edit');
                            function loadDefaultTinyMCEContent(){
                                
                                //CHange the content inside the setContent
                                            tinyMCE.activeEditor.setContent(content.value);
                                        }

                            window.onload = loadDefaultTinyMCEContent;
                        </script>
                    </div>
                    @endif              
                </div>
            </div>
        </div>
    </div>
        
    @include('admin.partials.footer')
        

@endsection

@section('extraJS')
        <script>
            function myFunction() 
            {
                var element = document.getElementById("navbarSupportedContent");
                element.classList.toggle("collapse");
            }
            function enableEdit(category_count)
            {
                var i = 0;
                // alert(i);
                var category = document.getElementById("category_edit");
              
                        // category.disabled = false;
                for(var i=0;i<category_count;i++)
                {
                    alert(category_count);
                    alert(document.getElementById("category_edit["+i+"]").value);
                }
                    
               

            }
            var words = document.getElementById("free_words"); 
            var hlink = document.getElementById("url_1");
            
            
            // var url =location.pathname+'?category='+category+'&location='+location+'&words='+words.value;
            
            
            function myf()
            {
                var e = document.getElementById("category");
                var category = e.options[e.selectedIndex].value;
                var e1 = document.getElementById("location");
                var location_cat = e1.options[e1.selectedIndex].value;
                var url =location.pathname+'?category='+category+'&location='+location_cat+'&words='+words.value;
                // alert(category);
                // alert(location_cat);
                hlink.setAttribute('href', url);
                hlink.click();
            }
            function myFunction() {
            var element = document.getElementById("navbarSupportedContent");
            element.classList.toggle("collapse");
            }
        </script>
        
@endsection