 <h5>{{__('All Search Options')}}</h5>
 <div class="checkbox-optionlist">
    <p><b class="checkbox-header" >{{__('Type of Hiring')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[0]" value="0">
        <label><input type="checkbox" name="type_of_hiring[0]" value="1" /> {{__('Part Time')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[1]" value="0">
        <label><input type="checkbox" name="type_of_hiring[1]" value="1"/> {{__('Full Time')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[2]" value="0">
        <label><input type="checkbox" name="type_of_hiring[2]" value="1" /> {{__('Sub Full Time')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[3]" value="0">
        <label><input type="checkbox" name="type_of_hiring[3]" value="1"/> {{__('Dispatch')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[4]" value="0">
        <label><input type="checkbox" name="type_of_hiring[4]" value="1" /> {{__('Outside')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[5]" value="0">
        <label><input type="checkbox" name="type_of_hiring[5]" value="1" />  {{__('Fulltime Possibility')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="type_of_hiring[6]" value="0">
        <label><input type="checkbox" name="type_of_hiring[6]" value="1" /> {{__('Other')}}</label>
    </div>
</div>
<div class="checkbox-optionlist" >
    <p><b class="checkbox-header">{{__('Duration')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="duration[0]" value="0" >
        <label><input type="checkbox" name="duration[0]" value="1" /> {{__('Long')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="duration[1]" value="0" >
        <label><input type="checkbox" name="duration[1]" value="1" /> {{__('Temporary')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="duration[2]" value="0" >
        <label><input type="checkbox" name="duration[2]" value="1" />{{__('Other')}}</label>
    </div>                            
</div>
<div class="checkbox-optionlist" >
    <p><b class="checkbox-header">{{__('Hours')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="hours[0]" value="0" >
        <label><input type="checkbox" name="hours[0]" value="1" /> {{__('Free')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hours[1]" value="0" >
        <label><input type="checkbox" name="hours[1]" value="1" />{{__('From Morning')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hours[2]" value="0" >
        <label><input type="checkbox" name="hours[2]" value="1" />{{__('From Noon')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hours[3]" value="0" >
        <label><input type="checkbox" name="hours[3]" value="1" />{{__('From Afternoon')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hours[4]" value="0" >
        <label><input type="checkbox" name="hours[4]" value="1" />{{__('Night')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hours[5]" value="0" >
        <label><input type="checkbox" name="hours[5]" value="1" />{{__('Short Time')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hours[6]" value="0" >
        <label><input type="checkbox" name="hours[6]" value="1" />{{__('Other')}}</label>
    </div>
</div>

<div class="checkbox-optionlist" >
    <p><b class="checkbox-header">{{__('Hour Shift')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="hour_shift[0]" value="0" >
        <label><input type="checkbox" name="hour_shift[0]" value="1" />{{__('Free')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[1]" value="0" >
        <label><input type="checkbox" name="hour_shift[1]" value="1" /> {{__('Fixed')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[2]" value="0" >
        <label><input type="checkbox" name="hour_shift[2]" value="1" /> {{__('Sat Sun Only')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[3]" value="0" >
        <label><input type="checkbox" name="hour_shift[3]" value="1" /> {{__('Weekday')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[4]" value="0" >
        <label><input type="checkbox" name="hour_shift[4]" value="1" /> {{__('1-2 Days in a Week')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[5]" value="0" >
        <label><input type="checkbox" name="hour_shift[5]" value="1" /> {{__('3-4 Days in a Week')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[6]" value="0" >
        <label><input type="checkbox" name="hour_shift[6]" value="1" /> {{__('More than 4 Days')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="hour_shift[7]" value="0" >
        <label><input type="checkbox" name="hour_shift[7]" value="1" /> {{__('Other')}}</label>
    </div>
    
    
</div>
<div class="checkbox-optionlist" >
    <p><b class="checkbox-header">{{__('Location Type')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="location_type[0]" value="0">
        <label><input type="checkbox" name="location_type[0]" value="1"/> {{__('Indoor')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="location_type[1]" value="0">
        <label><input type="checkbox" name="location_type[1]" value="1"/> {{__('Outdoor')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="location_type[2]" value="0">
        <label><input type="checkbox" name="location_type[2]" value="1"/> {{__('Other')}}</label>
    </div>
</div>
<div class="checkbox-optionlist" >
    <p><b class="checkbox-header">{{__('Jobfield Type')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="job_type[0]" value="0">
        <label><input type="checkbox" name="job_type[0]" value="1"/> {{__('Food')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[1]" value="0">
        <label><input type="checkbox" name="job_type[1]" value="1"/> {{__('Service')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[2]" value="0">
        <label><input type="checkbox" name="job_type[2]" value="1" /> {{__('Retail')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[3]" value="0">
        <label><input type="checkbox" name="job_type[3]" value="1" /> {{__('Office')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[4]" value="0">
        <label><input type="checkbox" name="job_type[4]" value="1" /> {{__('Sales')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[5]" value="0">
        <label><input type="checkbox" name="job_type[5]" value="1" /> {{__('Manufacture')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[6]" value="0">
        <label><input type="checkbox" name="job_type[6]" value="1" /> {{__('Shipping')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[7]" value="0">
        <label><input type="checkbox" name="job_type[7]" value="1" /> {{__('Medical')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="job_type[8]" value="0">
        <label><input type="checkbox" name="job_type[8]" value="1" /> {{__('Other')}}</label>
    </div>
    
</div>

<div class="checkbox-optionlist" >
    <p><b class="checkbox-header">{{__('Apply Type')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="apply_type[0]" value="0">
        <label><input type="checkbox" name="apply_type[0]" value="1" /> {{__('Urgent')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[1]" value="0">
        <label><input type="checkbox" name="apply_type[1]" value="1" /> {{__('Mass')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[2]" value="0">
        <label><input type="checkbox" name="apply_type[2]" value="1"/> {{__('Side')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[3]" value="0">
        <label><input type="checkbox" name="apply_type[3]" value="1"/> {{__('Male & Female')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[4]" value="0">
        <label><input type="checkbox" name="apply_type[4]" value="1"/> {{__('Male')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[5]" value="0">
        <label><input type="checkbox" name="apply_type[5]" value="1" /> {{__('Female')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[6]" value="0">
        <label><input type="checkbox" name="apply_type[6]" value="1" /> {{__('No Experience')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[7]" value="0">
        <label><input type="checkbox" name="apply_type[7]" value="1" /> {{__('Experienced')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[8]" value="0">
        <label><input type="checkbox" name="apply_type[8]" value="1" /> {{__('House Wife')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[9]" value="0">
        <label><input type="checkbox" name="apply_type[9]" value="1" /> {{__('Senior')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[10]" value="0">
        <label><input type="checkbox" name="apply_type[10]" value="1" />{{__('Highschool Students')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[11]" value="0">
        <label><input type="checkbox" name="apply_type[11]" value="1" /> {{__('Collage Students')}}</label>
    </div>
    <div class="option-list">
        <input type="hidden" name="apply_type[12]" value="0">
        <label><input type="checkbox" name="apply_type[12]" value="1" /> {{__('Other')}}</label>
    </div>
</div>
<div class="checkbox-optionlist">
    <p><b class="checkbox-header">{{__('Others')}}</b></p>
    <div class="option-list">
        <input type="hidden" name="other_options[0]" value="0" /> 
        <label><input type="checkbox" name="other_options[0]" value="1"/> {{__('Car Motorcycle')}}</label>
        
    </div>
    <div class="option-list">
        <input type="hidden" name="other_options[1]" value="0" /> 
        <label><input type="checkbox" name="other_options[1]" value="1"/> {{__('Support Transportation Fee')}}</label>
        
    </div>
    <div class="option-list">
        <input type="hidden" name="other_options[2]" value="0" /> 
        <label><input type="checkbox" name="other_options[2]" value="1" /> {{__('Uniform')}}</label>
        
    </div>
    <div class="option-list">
        <input type="hidden" name="other_options[3]" value="0" />
        <label><input type="checkbox" name="other_options[3]" value="1" /> {{__('No CV')}}</label>
        
    </div>
    <div class="option-list">
        <input type="hidden" name="other_options[4]" value="0" />
        <label><input type="checkbox" name="other_options[4]" value="1"/> {{__('Other')}}</label>
        
    </div>
</div> 

