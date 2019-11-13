
@extends('layouts.logreglayout')
@section('extraCSS')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#"><i><img src="/assets/images/TOP44.png" alt="" style="width:120px; height: 90px;"></i> </a>
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
                <div class="container">
                    <ul class="apb-holder" >
                        <li class="all-post-btn">
                            {{__('Area')}} <br>
                            <select style="width:100px;height:30px;" id="location" name="location_category">
                                <option value=''>{{__('All')}}</option>                            
                                <option value='1' {{ request('location')==1?'selected':'' }} >霧島・姶良</option>
                                <option value='2' {{ request('location')==2?'selected':'' }} >鹿児島</option>
                                <option value='3' {{ request('location')==3?'selected':'' }} >大隅・鹿屋</option>
                                <option value='4' {{ request('location')==4?'selected':'' }} >宮崎・都城</option>
                                <option value='5' {{ request('location')==5?'selected':'' }} >県外のお仕事</option>
                            </select>
                        </li>
                        <li class="all-post-btn">
                            {{__('Category')}} <br>
                            <select style="width:100px;height:30px;" id="category" name="category">
                                <option value=''>{{__('All')}}</option>
                                <option value='1' {{ request('category')==1?'selected':'' }} >A</option>
                                <option value='2' {{ request('category')==2?'selected':'' }}> B</option>
                                <option value='3' {{ request('category')==3?'selected':'' }}> C</option>
                                <option value='4' {{ request('category')==4?'selected':'' }}>D</option>
                                <option value='5' {{ request('category')==5?'selected':'' }}>E</option>
                            </select>
                        </li>
                        <!-- <a href="/admin/allpostslist?location=1"><li class="all-post-btn"> <img src="/assets/images/TOP03.png" class="img-responsive"> </li></a>
                        <a href="/admin/allpostslist?location=2"><li class="all-post-btn"> <img src="/assets/images/TOP05.png" class="img-responsive"> </li></a>
                        <a href="/admin/allpostslist?location=3"><li class="all-post-btn"> <img src="/assets/images/TOP07.png" class="img-responsive"> </li></a>
                        <a href="/admin/allpostslist?location=4"><li class="all-post-btn"> <img src="/assets/images/TOP13.png" class="img-responsive"> </li></a>
                        <a href="/admin/allpostslist?location=5"><li class="all-post-btn"> <img src="/assets/images/TOP15.png" class="img-responsive"> </li></a> -->
                        <li class="all-post-btn">
                            {{__('Free Word')}} <br>
                            <input type="text" id="free_words" class="" placeholder="フリーワード検索"  value="{{ request('words')?request('words'):'' }}" >
                            <!-- <button type="submit" class="searchButton" >
                                    <a href="" id="url_2"><span class="glyphicon glyphicon-search"></span></a>
                            </button> -->
                        </li>
                        <li class="all-post-btn"> 
                            <span class="search">
                                <button type="" class="btn btn-info" onclick="myf()" value="Search">
                                    <a href="" id="url_1" ></a>{{__('Search')}}
                                </button>
                            </span>
                        </li>
                        
                        <!-- <li class="all-post-btn">
                            <span class="search">
                                <input type="text" class="searchTerm" placeholder="What are you looking for?"/>
                                <button type="submit" class="searchButton">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </li> -->
                    </ul>
                </div>
                <h3>Posts</h3>
                @include('partials.success')
                <!-- <button class="btn btn-primary" style="float:right;" >Edit List</button> -->
                <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>  -->
                <form action="{{route('admin.editpostorder')}}" method="POST" onsubmit="return confirm('sure want to change order?');">
                @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('Category')}}</th>
                                <th>{{__('Priority')}}</th>
                                <th>{{__('Company Name')}}</th>
                                <th>{{__('Email')}}</th>
                                <th>{{__('Edit')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td> 
                                    <select style="width:100px;height:30px;" id="category_edit" name="category_edit[]" >
                                        <option value="1" {{$post->category == 1?'selected':'' }} > A</option>
                                        <option value="2" {{$post->category == 2?'selected':'' }} > B</option>
                                        <option value="3" {{$post->category == 3?'selected':'' }} > C</option>
                                        <option value="4" {{$post->category == 4?'selected':'' }} > D</option>
                                        <option value="5" {{$post->category == 5?'selected':'' }} > E</option>
                                    </select> 
                                </td>
                                <td><input type="number" name="priority_edit[]" value="{{$post->priority}}"></td>
                                <td>{{$post->company_name}}</td>
                                <td>{{$post->mail}}</td>
                                <td>
                                    <a href="admin/editpost?id={{$post->id}}" class="btn btn-primary">{{__('Edit')}}</a>
                                    @if($post->active_status)
                                    <a href="admin/postaction/{{$post->id}}" class="btn btn-success" >{{__('Active')}}</a>
                                    @else
                                    <a href="admin/postaction/{{$post->id}}" class="btn btn-success" style="background-color: yellow;color: black;width: 120px;">{{__('Block')}}</a>
                                    @endif
                                </td>
                                <input type="hidden" value="{{$post->id}}" name="post_id[]">
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-info" style="float:right;" >{{__('Edit Post Order')}}</button>
                </form>
                <div class="pagination-section">
                    {{$posts->links()}}
                </div>
                
        
                {{-- <h4>Leave a Comment:</h4>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <br><br> --}}
                
                
                
                <div class="row">
                    
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