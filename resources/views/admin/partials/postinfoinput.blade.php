<table class="table ">
    <tr>
        <td class="wid1"> 
            {{__('Choose Catagory')}} <br>
            <select style="width:100%;" name="category">
                <option value='1'>A</option>
                <option value='2'>B</option>
                <option value='3'>C</option>
                <option value='4'>D</option>
                <option value='5'>E</option>
            </select>
        </td>
        <td class="wid4">
            {{__('Priority Number')}} <br>
            <input type="number" name="priority_number"   required number>
        </td>
        <td class="wid1"  style="">
            <input type="file" id="avatarInput" name="avatar_image" required />
            <img id="avatar" src="#" alt="your image" style="height:90px;width:120px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
    
        </td>
        <td class="wid4" style="visibility:hidden;" >
            <input type="text" >
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Company Name')}}</td>
        <td class="wid4">
            <input type="text" name="company_name"  required >
        </td>
        <td class="wid1">{{__('Location Catagory')}}</td>
        <td class="wid4"> 
            <select style="width:100%;height:30px;" name="location_category">
                <option value='1'>霧島・姶良</option>
                <option value='2'>鹿児島</option>
                <option value='3'>大隅・鹿屋</option>
                <option value='4'>宮崎・都城</option>
                <option value='5'>県外のお仕事</option>
            </select>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Address')}}</td>
        <td class="wid4">
            <input type="text" name="address"  required >
        </td>
        <td class="wid1">{{__('Phone Number')}}</td>
        <td class="wid4">
            <input type="text" name="phone_number"  >
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('FAX')}}</td>
        <td class="wid4">
            <input type="text" name="fax">
        </td>
        <td class="wid1">{{__('URL')}}</td>
        <td class="wid4">
            <input type="text" name="url">
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Mail Address')}}</td>
        <td class="wid4">
            <input type="text" name="mail_address"  >
        </td>
        <td class="wid1">{{__('Contact Person')}}</td>
        <td class="wid4">
            <input type="text" name="contact_person">
        </td>
    </tr>

    <tr rowspan="5">
        <td colspan="12">
            <input type='file' id="bannerInput" name="banner_image"  required />
                <img id="banner" src="#" alt="your image" style="height:auto;width:1000px;" onerror=this.src="/assets/images/TOP_backgroundimg_sample.png" />
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Occupation')}}</td>
        <td class="wid4">
            <input type="text" name="occupation"  required>
        </td>
        <td class="wid1">{{__('Time')}}</td>
        <td class="wid4">
            <input type="text" name="time"  required>
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Salary')}}</td>
        <td class="wid4">
            <input type="text" name="salary"  required >
        </td>
        <td class="wid1">{{__('Holiday')}}</td>
        <td class="wid4">
            <input type="text" name="holiday"  >
        </td>
    </tr>

    <tr>
        <td class="wid1">{{__('Treatment')}}</td>
        <td class="wid4">
            <input type="text" name="treatment" required >
        </td>
        <td class="wid1">{{__('Apply')}}</td>
        <td class="wid4">
            <input type="text" name="apply">
        </td>
    </tr>
    <tr rowspan="5">
        <td colspan="12" style=" margin: 5%;"> {{__('Detail Information')}}
        <input type="text" name="detail_info"  required>
        </td>
        
    </tr>
</table>