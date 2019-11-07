<br/>
<h2 style="text-align:center;">{{__('Apply')}}</h2>
<br/>
@include('partials.success')
<form action="{{route('applicationcontact')}}" method="POST">
@csrf
  <h4> &nbsp &nbsp {{__('Contact form from companies')}} </h4>
  <table class="content table table-bordered">
    <tr>
      <td class="blue"> {{__('Company Name')}} </td>
      <td class="green"> <input type="text" name="company_name" value="" style="width:100%;"> </td>
    </tr>
    <tr>
      <td class="blue"> {{__('Contact Person')}} </td>
      <td class="green"> <input type="text" name="contact_person" value="" style="width:100%;"> </td>
    </tr>

    <tr>
      <td class="blue"> {{__('Address')}}</td>
      <td class="green"> <input type="text" name="address" value="" style="width:100%;"> </td>
    </tr>

    <tr>
      <td class="blue"> {{__('Telephone')}}</td>
      <td class="green"> <input type="text" name="telephone" value="" style="width:100%;"> </td>
    </tr>

    <tr>
      <td class="blue"> {{__('Fax')}}</td>
      <td class="green"> <input type="text" name="fax" value="" style="width:100%;"> </td>
    </tr>

    <tr>
      <td class="blue"> {{__('Mail Address')}}</td>
      <td class="green"> <input type="text" name="contact_mail" value="" style="width:100%;"> </td>
    </tr>
    <tr>
        <td class="blue"> {{__('Subject')}}</td>
        <td class="green"> <input type="text" name="subject" value="" style="width:100%;"> </td>
    </tr>
  
    <tr rowspan="3">
      <td class="blue">{{__('Comment')}} </td>
      <td class="green"> <textarea row="7" type="text"  id="mytextarea1" name="application_text" value="" style="max-width:750px; width:100%; border-radius: 6px; min-height: 200px;"></textarea> </td>
    </tr>
  </table>
  <div class="content row">
      <button type="submit" class="btn btn-danger btn-lg col-xs-4 col-xs-offset-4"> {{__('Submit')}}</button>
  </div>
</form>
<br/><br/>
<script src="https://cdn.tiny.cloud/1/35um559xu11tzdnitdu7xapp9l3qe0wynymde7jvvqw1t6hi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#mytextarea',  
    height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});
  </script>

