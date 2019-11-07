<table class="table">
    
    <tr>
    @if(auth()->id())
        
    
        <td class="wid1"> 
            {{__('Catagory')}} <br>
            {{chr($post->category+64)}}
            
        </td>
        <td class="wid4">
            {{__('Priority Number')}} <br>
            <input type="text" name="priority_number"   value="{{$post->priority}}" disabled >
        </td>
    @endif
        <td class="wid1"  style="">
            <!-- <input type="file" name="avatar_image" disabled /> -->
            <img id="avatar" src="/storage/uploads/avatar/{{$post->avatar}}" alt="your image" style="height:140px;width:140px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
    
        </td>
    @if(auth()->id())
        <td class="wid4" style="" >
        <ul style="display:inline-block;list-style: none;padding:0;">
            <li style="">
                <a href="/admin/editpost?id={{$post->id}}" class="btn btn-info" style="width:100px;margin:3px;" > {{__('Edit Post')}} </a>
            </li>
            
            <li style="" >
                <a href="/admin/deletepost/{{$post->id}}" class="btn btn-danger" onclick="return deletecheck()" style="width:100px;margin:3px;" > {{__('Delete')}} </a> 
            </li>
            <li>
                @if($post->active_status)
                <a href="/admin/postaction/{{$post->id}}" class="btn btn-danger"   style="width:100px;float:right;margin:3px;background-color: yellow;color: black"  > {{__('Block')}} </a>
                @elseif(!$post->active_status)
                <a href="/admin/postaction/{{$post->id}}" class="btn btn-success"   style="width:100px;float:right;"  > {{__('Active')}} </a>
                @endif
                
            </li>
        </ul>
        <!-- <a href="/admin/editpost?id={{$post->id}}" class="btn btn-info" style="width:100px;" > {{__('Edit Post')}} </a>
        <a href="/admin/deletepost/{{$post->id}}" class="btn btn-danger"  onclick="return deletecheck()" style="width:100px;float:right;" onclick="deletecheck()" > {{__('Delete')}} </a>
        <br>
        <a href="/admin/deletepost/{{$post->id}}" class="btn btn-danger"  onclick="return deletecheck()" style="width:100px;float:right;" onclick="deletecheck()" > {{__('Block')}} </a> -->
        
        
        </td>
    @endif
    </tr>

    <tr>
        <td class="wid1">{{__('Company Name')}}</td>
        <td class="wid4">
            {{$post->company_name}}
        </td>
        <td class="wid1">{{__('Location Category')}}</td>
        <td class="wid4"> 
            @if($post->location_category==1)
                霧島・姶良
            @elseif($post->location_category==2)
                鹿児島
            @elseif($post->location_category==3)
                大隅・鹿屋
            @elseif($post->location_category==4)
                宮崎・都城
            @elseif($post->location_category==5)
                県外のお仕事
            @endif
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Address')}}</td>
        <td class="wid4">
            {{$post->address}}
        </td>
        <td class="wid1">{{__('Phone Number')}}</td>
        <td class="wid4">
            <a href="tel:{{$post->phone}}">{{$post->phone}}</a>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('FAX')}}</td>
        <td class="wid4">
        {{$post->fax}}
        </td>
        <td class="wid1">{{__('URL')}}</td>
        <td class="wid4">
        <a href="//{{$post->url}}">{{$post->url}}</a>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Mail Address')}}</td>
        <td class="wid4">
        <a href="mailto:{{$post->mail}}">{{$post->mail}}</a>
        </td>
        <td class="wid1">{{__('Contact Person')}}</td>
        <td class="wid4">
        {{$post->contact_person}}
        </td>
    </tr>

    <tr rowspan="5">
        <td colspan="12">
            <!-- <input type='file' id="bannerInput" name="banner_image"  required /> -->
                <img id="banner" src="/storage/uploads/banner/{{$post->banner_image}}" alt="your image" class="banner-image-big img-responsive" />
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Occupation')}}</td>
        <td class="wid4">
        {{$post->admin_infoA}}
        </td>
        <td class="wid1">{{__('Time')}}</td>
        <td class="wid4">
        {{$post->admin_infoB}}
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Salary')}}</td>
        <td class="wid4">
        {{$post->admin_infoC}}
        </td>
        <td class="wid1">{{__('Holiday')}}</td>
        <td class="wid4">
        {{$post->admin_infoD}}
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Treatment')}}</td>
        <td class="wid4">
        {{$post->admin_infoE}}
        </td>
        <td class="wid1">{{__('Apply')}}</td>
        <td class="wid4">
        {{$post->admin_infoF}}
        </td>
    </tr>
    <tr rowspan="5">
        <td colspan="12" style=" margin: 5%;"> <h4 style="background-color: green;color:white"> {{__('Detail Information')}} </h4>
        {{$post->detail_info}}
        </td>
        
    </tr>
</table>