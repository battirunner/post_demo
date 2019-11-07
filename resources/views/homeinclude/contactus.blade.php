<br/>
<table class="content table table-bordered">
<!-- <tr>
<td class="blue"> fame asda/ Fixed</td>
<td class="green"> dasd asdsa/ Free </td>
</tr> -->
</table>
@include('partials.success')
<h2 style="text-align:center;">{{__('Contact Us')}}</h2>
<br/>
<form action="{{route('sendcontact')}}" method="POST">
@csrf
    <table class="content table table-bordered">
        <tr>
            <td class="blue"> {{__('Company Name')}} </td>
            <td class="green"> <input type="text" name="company_name" value="" style="width:100%;"> </td>
        </tr>
        <tr>
            <td class="blue"> {{__('Email')}} </td>
            <td class="green"> <input type="text" name="contact_mail" value="" style="width:100%;"> </td>
        </tr>
        <tr>
            <td class="blue"> {{__('Subject')}}</td>
            <td class="green"> <input type="text" name="subject" value="" style="width:100%;"> </td>
        </tr>
        <tr>
            <td class="blue"> {{__('Telephone')}}</td>
            <td class="green"> <input type="text" name="telephone" value="" style="width:100%;"> </td>
        </tr>
        
        {{-- <tr>
            <td class="blue"> {{__('Telephone')}}</td>
            <td class="green"> <input type="date" co id='datetimepicker1' name="datetime" value="" style="width:100%;"> </td>
        </tr> --}}
        {{-- <tr>
            <td class="blue"> {{__('Fax')}}</td>
            <td class="green"> <input type="text" value="" style="width:100%;"> </td>
        </tr> --}}
        <tr rowspan="3">
            <td class="blue">{{__('Comment')}} </td>
            <td class="green"> <textarea row="7" type="text" name="message" value="" style="width:100%; border-radius: 6px;min-height: 300px;"></textarea> </td>
        </tr>
    </table>
    <div class="content row">
        <button type="submit" class="btn btn-danger btn-lg col-xs-4 col-xs-offset-4"> {{__('Submit')}}</button>
    </div>
</form>
<br/><br/>