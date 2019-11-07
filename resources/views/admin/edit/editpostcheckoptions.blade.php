<div class="row" >          
    <div class="col-sm-3 col-xs-3 checkbox-optionlist">
        <h5 class="checkbox-header" >{{__('Type of Hiring')}}</h5>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[0]" value="0">
            <label><input type="checkbox" name="type_of_hiring[0]" {{ $post->hiring_type & 1 ? 'checked': '' }} value="1_1" /> {{__('Part Time')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[1]" value="0">
            <label><input type="checkbox" name="type_of_hiring[1]" {{ $post->hiring_type & 2 ? 'checked': '' }} value="1_2"/> {{__('Full Time')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[2]" value="0">
            <label><input type="checkbox" name="type_of_hiring[2]" {{ $post->hiring_type & 4 ? 'checked': '' }} value="1_3" /> {{__('Sub Full Time')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[3]" value="0">
            <label><input type="checkbox" name="type_of_hiring[3]" {{ $post->hiring_type & 8 ? 'checked': '' }} value="1_4"/> {{__('Dispatch')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[4]" value="0">
            <label><input type="checkbox" name="type_of_hiring[4]" {{ $post->hiring_type & 16 ? 'checked': '' }} value="1_5" /> {{__('Outside')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[5]" value="0">
            <label><input type="checkbox" name="type_of_hiring[5]" {{ $post->hiring_type & 32 ? 'checked': '' }} value="1_6" /> {{__('Fulltime Possibility')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="type_of_hiring[6]" value="0">
            <label><input type="checkbox" name="type_of_hiring[6]" {{ $post->hiring_type & 64 ? 'checked': '' }} value="1_7" /> {{__('Other')}}</label>
        </div>
    </div>
    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Duration')}}</h5>
        <div class="option-list">
            <input type="hidden" name="duration[0]" value="0" >
            <label><input type="checkbox" name="duration[0]" value="2_1" {{ $post->duration & 1 ? 'checked': '' }} /> {{__('Long')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="duration[1]" value="0" >
            <label><input type="checkbox" name="duration[1]" value="2_2" {{ $post->duration & 2 ? 'checked': '' }} /> {{__('Temporary')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="duration[2]" value="0" >
            <label><input type="checkbox" name="duration[2]" value="2_3"  {{ $post->duration & 4 ? 'checked': '' }} />{{__('Other')}}</label>
        </div>                            
    </div>
    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Hours')}}</h5>
        <div class="option-list">
            <input type="hidden" name="hours[0]" value="0" >
            <label><input type="checkbox" name="hours[0]" value="3_1" {{ $post->hours & 1 ? 'checked': '' }} /> {{__('Free')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hours[1]" value="0" >
            <label><input type="checkbox" name="hours[1]" value="3_2" {{ $post->hours & 2 ? 'checked': '' }} /> {{__('From Morning')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hours[2]" value="0" >
            <label><input type="checkbox" name="hours[2]" value="3_3" {{ $post->hours & 4 ? 'checked': '' }} />{{__('From Noon')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hours[3]" value="0" >
            <label><input type="checkbox" name="hours[3]" value="3_4" {{ $post->hours & 8 ? 'checked': '' }} />{{__('From Afternoon')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hours[4]" value="0" >
            <label><input type="checkbox" name="hours[4]" value="3_5" {{ $post->hours & 16 ? 'checked': '' }} />{{__('Night')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hours[5]" value="0" >
            <label><input type="checkbox" name="hours[5]" value="3_6" {{ $post->hours & 32 ? 'checked': '' }} />{{__('Short Time')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hours[6]" value="0" >
            <label><input type="checkbox" name="hours[6]" value="3_7" {{ $post->hours & 64 ? 'checked': '' }} />{{__('Other')}}</label>
        </div>
    </div>

    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Hour Shift')}}</h5>
        <div class="option-list">
            <input type="hidden" name="hour_shift[0]" value="0" >
            <label><input type="checkbox" name="hour_shift[0]" value="4_1" {{ $post->hour_shift & 1 ? 'checked': '' }} /> {{__('Free')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[1]" value="0" >
            <label><input type="checkbox" name="hour_shift[1]" value="4_2" {{ $post->hour_shift & 2 ? 'checked': '' }} /> {{__('Fixed')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[2]" value="0" >
            <label><input type="checkbox" name="hour_shift[2]" value="4_3" {{ $post->hour_shift & 4 ? 'checked': '' }} /> {{__('Sat Sun Only')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[3]" value="0" >
            <label><input type="checkbox" name="hour_shift[3]" value="4_4" {{ $post->hour_shift & 8 ? 'checked': '' }} /> {{__('Weekday')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[4]" value="0" >
            <label><input type="checkbox" name="hour_shift[4]" value="4_5" {{ $post->hour_shift & 16 ? 'checked': '' }} /> {{__('1-2 Days in a Week')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[5]" value="0" >
            <label><input type="checkbox" name="hour_shift[5]" value="4_6" {{ $post->hour_shift & 32 ? 'checked': '' }} /> {{__('3-4 Days in a Week')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[6]" value="0" >
            <label><input type="checkbox" name="hour_shift[6]" value="4_7" {{ $post->hour_shift & 64 ? 'checked': '' }} /> {{__('More than 4 Days')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="hour_shift[7]" value="0" >
            <label><input type="checkbox" name="hour_shift[7]" value="4_8" {{ $post->hour_shift & 128 ? 'checked': '' }}/> {{__('Other')}}</label>
        </div>
        
        
    </div>
    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Location Type')}}</h5>
        <div class="option-list">
            <input type="hidden" name="location_type[0]" value="0">
            <label><input type="checkbox" name="location_type[0]" value="5_1" {{ $post->location_type & 1 ? 'checked': '' }} /> {{__('Indoor')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="location_type[1]" value="0">
            <label><input type="checkbox" name="location_type[1]" value="5_2" {{ $post->location_type & 2 ? 'checked': '' }} /> {{__('Outdoor')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="location_type[2]" value="0">
            <label><input type="checkbox" name="location_type[2]" value="5_3" {{ $post->location_type & 4 ? 'checked': '' }}/> {{__('Other')}}</label>
        </div>
    </div>
    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Jobfield Type')}}</h5>
        <div class="option-list">
            <input type="hidden" name="job_type[0]" value="0">
            <label><input type="checkbox" name="job_type[0]" value="6_1" {{ $post->job_field & 1 ? 'checked': '' }} /> {{__('Food')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[1]" value="0">
            <label><input type="checkbox" name="job_type[1]" value="6_2" {{ $post->job_field & 2 ? 'checked': '' }} /> {{__('Service')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[2]" value="0">
            <label><input type="checkbox" name="job_type[2]" value="6_3" {{ $post->job_field & 4 ? 'checked': '' }} /> {{__('Retail')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[3]" value="0">
            <label><input type="checkbox" name="job_type[3]" value="6_4" {{ $post->job_field & 8 ? 'checked': '' }} /> {{__('Office')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[4]" value="0">
            <label><input type="checkbox" name="job_type[4]" value="6_5" {{ $post->job_field & 16 ? 'checked': '' }}/> {{__('Sales')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[5]" value="0">
            <label><input type="checkbox" name="job_type[5]" value="6_6" {{ $post->job_field & 32 ? 'checked': '' }} /> {{__('Manufacture')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[6]" value="0">
            <label><input type="checkbox" name="job_type[6]" value="6_7" {{ $post->job_field & 64 ? 'checked': '' }}/> {{__('Shipping')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[7]" value="0">
            <label><input type="checkbox" name="job_type[7]" value="6_8" {{ $post->job_field & 128 ? 'checked': '' }}/> {{__('Medical')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="job_type[8]" value="0">
            <label><input type="checkbox" name="job_type[8]" value="6_9" {{ $post->job_field & 256 ? 'checked': '' }} /> {{__('Other')}}</label>
        </div>
        
    </div>

    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Apply Type')}}</h5>
        <div class="option-list">
            <input type="hidden" name="apply_type[0]" value="0">
            <label><input type="checkbox" name="apply_type[0]" value="7_1" {{ $post->applicant_type & 1 ? 'checked': '' }} /> {{__('Urgent')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[1]" value="0">
            <label><input type="checkbox" name="apply_type[1]" value="7_2" {{ $post->applicant_type & 2 ? 'checked': '' }} /> {{__('Mass')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[2]" value="0">
            <label><input type="checkbox" name="apply_type[2]" value="7_3" {{ $post->applicant_type & 4 ? 'checked': '' }}/> {{__('Side')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[3]" value="0">
            <label><input type="checkbox" name="apply_type[3]" value="7_4" {{ $post->applicant_type & 8 ? 'checked': '' }} /> {{__('Male & Female')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[4]" value="0">
            <label><input type="checkbox" name="apply_type[4]" value="7_5" {{ $post->applicant_type & 16 ? 'checked': '' }} /> {{__('Male')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[5]" value="0">
            <label><input type="checkbox" name="apply_type[5]" value="7_6" {{ $post->applicant_type & 32 ? 'checked': '' }} /> {{__('Female')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[6]" value="0">
            <label><input type="checkbox" name="apply_type[6]" value="7_7" {{ $post->applicant_type & 64 ? 'checked': '' }} /> {{__('No Experience')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[7]" value="0">
            <label><input type="checkbox" name="apply_type[7]" value="7_8" {{ $post->applicant_type & 128 ? 'checked': '' }} /> {{__('Experienced')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[8]" value="0">
            <label><input type="checkbox" name="apply_type[8]" value="7_9" {{ $post->applicant_type & 256 ? 'checked': '' }} /> {{__('House Wife')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[9]" value="0">
            <label><input type="checkbox" name="apply_type[9]" value="7_10" {{ $post->applicant_type & 512 ? 'checked': '' }} /> {{__('Senior')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[10]" value="0">
            <label><input type="checkbox" name="apply_type[10]" value="7_11" {{ $post->applicant_type & 1024 ? 'checked': '' }} /> {{__('Highschool Students')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[11]" value="0">
            <label><input type="checkbox" name="apply_type[11]" value="7_12" {{ $post->applicant_type & 2048 ? 'checked': '' }} /> {{__('Collage Students')}}</label>
        </div>
        <div class="option-list">
            <input type="hidden" name="apply_type[12]" value="0">
            <label><input type="checkbox" name="apply_type[12]" value="7_13" {{ $post->applicant_type & 4096 ? 'checked': '' }} /> {{__('Other')}}</label>
        </div>
    </div>
    <div class="col-sm-3 col-xs-3 checkbox-optionlist" >
        <h5 class="checkbox-header">{{__('Others')}}</h5>
        <div class="option-list">
            <input type="hidden" name="other_options[0]" value="0" /> 
            <label><input type="checkbox" name="other_options[0]" value="8_1" {{ $post->other_requirement & 1 ? 'checked': '' }} /> {{__('Car Motorcycle')}}</label>
            
        </div>
        <div class="option-list">
            <input type="hidden" name="other_options[1]" value="0" /> 
            <label><input type="checkbox" name="other_options[1]" value="8_2" {{ $post->other_requirement & 2 ? 'checked': '' }} /> {{__('Support Transportaion Fee')}}</label>
            
        </div>
        <div class="option-list">
            <input type="hidden" name="other_options[2]" value="0" /> 
            <label><input type="checkbox" name="other_options[2]" value="8_3" {{ $post->other_requirement & 4 ? 'checked': '' }} /> {{__('Uniform')}}</label>
            
        </div>
        <div class="option-list">
            <input type="hidden" name="other_options[3]" value="0" />
            <label><input type="checkbox" name="other_options[3]" value="8_4" {{ $post->other_requirement & 8 ? 'checked': '' }} /> {{__('No CV')}}</label>
            
        </div>
        <div class="option-list">
            <input type="hidden" name="other_options[4]" value="0" />
            <label><input type="checkbox" name="other_options[4]" value="8_5" {{ $post->other_requirement & 16 ? 'checked': '' }} /> {{__('Other')}}</label>
            
        </div>
    </div>                        
</div>
