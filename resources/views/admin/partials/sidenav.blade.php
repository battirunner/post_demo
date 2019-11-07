    <div class="col-sm-3 col-xs-3 sidenav">
        <h4>{{__('Admin')}} <a style="color:black;" class="btn btn-info" href="{{route('home')}}"> <u> {{__('Home')}} </u></a> </h4>
        @include('partials.errors')
        <ul class="navbar-nav ml-auto sidenav-custom">
            <!-- {{url()->current()}} -->
            <a href="{{route('admin.dashboard')}}"><li class="{{ url()->current() == url('admin') ? 'active' : '' }}"> {{__('DashBoard')}} @if(url()->current() == url('admin')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a>
            <!-- <a href="{{route('admin.alllist')}}"><li class="{{ url()->current() == url('admin/alllist') ? 'active' : '' }}">{{__('All Admin')}} @if(url()->current() == url('admin/alllist')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a> -->
            <!-- <a href="{{route('admin.allposts')}}"><li class="{{ url()->current() == url('admin/allposts') ? 'active' : '' }}">{{__('All Posts')}} @if(url()->current() == url('admin/allposts')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a> -->
            <a href="{{route('admin.addposting')}}"><li class="{{ url()->current() == url('admin/addposting') ? 'active' : '' }}">{{__('Post New')}} @if(url()->current() == url('admin/addposting')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a>
            <!-- <a href="{{route('admin.editpost')}}"><li class="{{ url()->current() == url('admin/editpost') ? 'active' : url()->current() == url('admin/allposts') ? 'active' : '' }}">{{__('Edit Post')}} @if(url()->current() == url('admin/editpost') || url()->current() == url('admin/allposts') ) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> {{request('id')}} @endif </li></a> -->
            <a href="{{route('admin.addnewsletter')}}"><li class="{{ url()->current() == url('admin/addnewsletter') ? 'active' : '' }}">{{__('Add Newsletter')}} @if(url()->current() == url('admin/addnewsletter')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a>
            <a href="{{route('admin.newsletters')}}"><li class="{{ url()->current() == url('admin/newsletters') ? 'active' : '' }}">{{__('All Newsletter')}} @if(url()->current() == url('admin/newsletters')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a>
            <a href="{{route('admin.pricelist')}}"><li class="{{ url()->current() == url('admin/addpricelist') ? 'active' : '' }}">{{__('Add Pricelist')}} @if(url()->current() == url('admin/addpricelist')) <i><img style="float:right;height:30px;width:auto" src="/assets/images/icons/right.png" alt=""> </i> @endif </li></a>
            <a href="{{route('home')}}"><li class="">{{__('Home')}}</li></a>
            
        </ul><br><br>
        <!-- <ul class="navbar-nav ml-auto sidenav-custom-2">
            <li><a class="btn btn-danger btn-block" href="">Search button 1</a></li>
            <li><a class="btn btn-danger btn-block" href="">Search button 2</a></li>
            <li><a class="btn btn-danger btn-block" href="">Search button 3</a></li>
            
            <li><input type="text" class="form-control" placeholder="Search Blog.."></li>
            <li><input type="text" class="form-control" placeholder="Search Blog.."></li>
            <li><a class="nav-link nav-link-custom" style="color:white;" href="/">Search</a></li>
        </ul> -->
        {{-- <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Blog..">
            <span class="input-group-btn">
            <button  type="button">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            
            </span>
            <a class="nav-link nav-link-custom" style="color:white;" href="{{route('logout')}}">{{__('Logout')}}</a>
        </div> --}}
    </div>