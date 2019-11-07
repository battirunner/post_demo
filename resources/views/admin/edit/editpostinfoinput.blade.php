<table class="table ">
    <tr>
        <td class="wid1"> 
            {{__('Choose Catagory')}} <br>
            <select style="width:100%;" name="category">
                <option value='1' @if($post->location_category==1) selected @endif >A</option>
                <option value='2' @if($post->location_category==2) selected @endif >B</option>
                <option value='3' @if($post->location_category==3) selected @endif >C</option>
                <option value='4' @if($post->location_category==4) selected @endif >D</option>
                <option value='5' @if($post->location_category==5) selected @endif >E</option>
            </select>
        </td>
        <td class="wid4">
            {{__('Priority Number')}} <br>
            <input type="number" name="priority_number"  value="{{$post->priority}}" required>
        </td>
        <td class="wid1"  style="">
            <input type="file" id="avatarInput" name="avatar_image" />
            <img id="avatar" src="/storage/uploads/avatar/{{$post->avatar}}" alt="your image" style="height:90px;width:120px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
    
        </td>
        <td class="wid4" style="" >
        <ul style="display:inline-block;list-style: none;padding:0;">
            
            
            <li style="" >
                <a href="/admin/deletepost/{{$post->id}}" class="btn btn-danger" onclick="return deletecheck()" style="width:100px;margin:3px;" > {{__('Delete')}} </a> 
            </li>
            <li>
                @if($post->active_status)
                <a href="/admin/postaction/{{$post->id}}" class="btn btn-success"  style="width:100px;float:right;"    >{{__('Active')}}</a>
                @elseif(!$post->active_status)
                <a href="/admin/postaction/{{$post->id}}" class="btn btn-success"   style="width:100px;float:right;margin:3px;background-color: yellow;color: black" >{{__('Block')}}</a>
                @endif
                
            </li>
        </ul>
        </td>
        <!-- <td class="wid4" style="visibility:hidden;" > -->
            <input type="text" name="id" value="{{$post->id}}" style="visibility:hidden;" >
        <!-- </td> -->
    </tr>

    <tr>
        <td class="wid1">{{__('Company Name')}}</td>
        <td class="wid4">
            <input type="text" name="company_name"  value="{{$post->company_name}}" required >
        </td>
        <td class="wid1">{{__('Location Category')}}</td>
        <td class="wid4"> 
            <select style="width:100%;height:30px;" name="location_category">
                <option value='1' {{ $post->location_category==1 ? 'selected': '' }} >霧島・姶良</option>
                <option value='2' {{ $post->location_category==2 ? 'selected': '' }} >鹿児島</option>
                <option value='3' {{ $post->location_category==3 ? 'selected': '' }}>大隅・鹿屋</option>
                <option value='4' {{ $post->location_category==4 ? 'selected': '' }}>宮崎・都城</option>
                <option value='5' {{ $post->location_category==5 ? 'selected': '' }}>県外のお仕事</option>
            </select>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Address')}}</td>
        <td class="wid4">
            <input type="text" name="address" value="{{$post->address}}" required >
        </td>
        <td class="wid1">{{__('Phone Number')}}</td>
        <td class="wid4">
            <input type="text" name="phone_number"  value="{{$post->phone}}" required>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('FAX')}}</td>
        <td class="wid4">
            <input type="text" name="fax" value="{{$post->fax}}">
        </td>
        <td class="wid1">{{__('URL')}}</td>
        <td class="wid4">
            <input type="text" name="url" value="{{$post->url}}">
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Mail Address')}}</td>
        <td class="wid4">
            <input type="text" name="mail_address" value="{{$post->mail}}" required>
        </td>
        <td class="wid1">{{__('Contact Person')}}</td>
        <td class="wid4">
            <input type="text" name="contact_person" value="{{$post->contact_person}}" >
        </td>
    </tr>

    <tr rowspan="5">
        <td colspan="12">
            <input type='file' id="bannerInput" name="banner_image"  />
            <img id="banner" src="/storage/uploads/banner/{{$post->banner_image}}" alt="your image" style="height:auto;width:1000px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Occupation')}}</td>
        <td class="wid4">
            <input type="text" name="occupation" value="{{$post->admin_infoA}}" required>
        </td>
        <td class="wid1">{{__('Time')}}</td>
        <td class="wid4">
            <input type="text" name="time"  value="{{$post->admin_infoB}}" required>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Salary')}}</td>
        <td class="wid4">
            <input type="text" name="salary"  value="{{$post->admin_infoC}}" required >
        </td>
        <td class="wid1">{{__('Holiday')}}</td>
        <td class="wid4">
            <input type="text" name="holiday" value="{{$post->admin_infoD}}" >
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Treatement')}}</td>
        <td class="wid4">
            <input type="text" name="treatement" value="{{$post->admin_infoE}}" required >
        </td>
        <td class="wid1">{{__('Apply')}}</td>
        <td class="wid4">
            <input type="text" name="apply" value="{{$post->admin_infoF}}" >
        </td>
    </tr>
    <tr rowspan="5">
        <td colspan="12" style=" margin: 5%;"> {{__('Detail Information')}}
        <input type="text" name="detail_info"  value="{{$post->detail_info}}" required>
        </td>
        
    </tr>
</table>