
@extends('layouts.logreglayout')

@section('extraCSS')

<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 80vh;
    }
    
    /* Set black background color, white text and some padding */
    footer {
        /* position: absolute; */
        bottom: 0px;
      background-color: #555;
      color: white;
      padding: 15px;
      height: 10vh;
    }
    .sidenav-custom li {
        padding: 5px;
        border: solid whitesmoke 2px;
        background-color: gray;
        color: white;
        text-align: center;
    }
    .sidenav-custom-2 li {
        padding: 5px;
        /* background-color: gray; */
        color: white;
        text-align: center;
    }
    .sidenav-custom .active {
        color: red;
        background-color: whitesmoke;
    }

    .sidenav-custom li a {
        width: 100%;
        padding: 5px;
        color: white;
      

    }
    .page-2{margin-top: 10px;}
    .table{width: 100%;}
    .table tr td {
            padding: 5px;
            border: 3px solid #222!important

        }
    .wid1{
            width: 200px;
            background-color: rgb(0, 109, 47);
            color: white;
        }
    .wid2{width: 15%;}
    .wid4{
            width: 35%;
            background-color: bisque;
        }
    .wid8{width: 70%;}
    .wid12{width: 100%;}
    input {width: 100%; padding: 0px;}

    label {
        display: block;
        padding-left: 15px;
        text-indent: -15px;
    }
    .option-list {
        padding-left:20px;
    }
    .option-list label input {
        width: 13px;
        height: 13px;
        padding: 0;
        margin:0;
        vertical-align: bottom;
        position: relative;
        top: -5px;
        *overflow: hidden;
    }
    .checkbox-header {
        /* position: absolute; */
        background:rgb(0, 109, 47);
        width:100%;
        padding: 10px;
        color: white;


    }
    .checkbox-optionlist {
        border-top: 2px solid black;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        border-left: 2px solid black;        
        /* height:300px; */
        padding-left: 0;
        padding-right: 0;
    }
    .tag-input-area{
        border: 2px solid black;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 15px;
    }
    .label-info{
        background-color: rgb(0, 109, 47);
        padding: 5px;
        border-radius: 5px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .tag-input-field{
        padding: 10px;
        border: 2px solid green;
    }
    .post-show-body{margin-left: 12vw;}
    .category-lvl{ padding: 4px 8px; background: #a10; color: #fff; border-radius: 3px; line-height: 30px!important; margin: 2px!important; display: inline-block;}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
      @media only screen and (max-width: 425px) {
        .menu{margin-top: 10px;}
        .post-show-body{margin-left: 0px;}
      }
    }
</style>

@endsection
@section('content')


                

    <div class="container-fluid post-show-body">
        <div class="" style="margin-left: -5px;">    
            @include('homeinclude.topnavbar')
        </div>

        <div class="row">
            
            <div class="col-sm-10 col-xs-10">
                @include('partials.success') 
                <h4>{{$post->company_name}}</h4>
                <!-- <form role="form" action="{{route('admin.postadd')}}" method="POST" enctype="multipart/form-data" > -->
                    <!-- @csrf -->
                        <!-- <div class="form-group">
                            {{-- <textarea class="form-control" rows="3" required></textarea> --}}
                            <img src="/assets/images/TOP_backgroundimg_sample.png" alt="">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button> --> 
                    @include('posts.partials.postinfo')
                    @include('posts.partials.postcheckbox')
                    <!-- <div class="form-group tag-input-area post-show-bottom">
                        <label for="city_tag">All Tag</label>
                        <input type="text" name="tag_words" value="{{$key_words_1}}" data-role="tagsinput" class="form-control" id="special-input" disabled />
                    </div> -->
                    <!-- <div class="form-group tag-input-area">
                        <label for="city_tag">write something and press enter to convert into tag</label>
                        <input type="text" name="tag_words" value="" class="form-control" id="checkbox-input" />
                    </div> -->
                    <div class="post-show-bottom text-center" style="padding: 10px; border: 0px;">
                    @if($post->phone)
                    <a class="btn btn-primary btn-lg" style="width: 200px!important;" href="tel:{{$post->phone}}"> <i><img src="/assets/images/icons/call.png" style="height:30px;width:30px;" alt=""></i> {{__('Call')}} </a>
                    @else
                    <a class="btn btn-secondary btn-lg" style="width: 200px!important;" href="#" onclick="phonemailcheck()"> <i><img src="/assets/images/icons/call.png" style="height:30px;width:30px;" alt=""></i> {{__('Call')}} </a>
                    @endif
                    @if($post->mail)
                    <a class="btn btn-primary btn-lg" style="width: 200px!important;" href="mailto:{{$post->mail}}"> <i><img src="/assets/images/icons/mail.png" style="height:30px;width:30px;" alt=""></i> {{__('Mail')}} </a>
                    @else
                    <a class="btn btn-secondary btn-lg" style="width: 200px!important;" href="#" onclick="phonemailcheck()"> <i><img src="/assets/images/icons/mail.png" style="height:30px;width:30px;" alt=""></i> {{__('Mail')}} </a>
                    @endif
                    </div>
                    
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
        
    @include('admin.partials.footer')
    <!-- <footer class="container-fluid" style="position:relative;">
        <p>Footer Text</p>
    </footer> -->
        

@endsection

@section('extraJS')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
     // Material Select Initialization
        function myFunction() {
            var element = document.getElementById("navbarSupportedContent");
            element.classList.toggle("collapse");
        }
        function phonemailcheck() {
            alert("登録されていません");
        }
        function deletecheck() {
           return confirm("Do you want to delete?")
        }

        function readURL(input, field) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if( field == 1) {
                        $('#avatar').attr('src', e.target.result);
                    }
                    if( field == 2){
                        $('#banner').attr('src', e.target.result);
                    }

                    
                }

                reader.readAsDataURL(input.files[0]);

            }            
        }
        

        $("#avatarInput").change(function() {
            readURL(this,field = 1);
        });
        $("#bannerInput").change(function() {
            readURL(this,field = 2);
        });
        var inputF = document.getElementById("checkbox-input");
        var obj = {a_1: "Part Time", a_2: "Full Time"};
        var check = {id1: 100, id2: 200, "tag with spaces": 300};
        $('#option1').change(function(){
            // alert(obj);
            alert(obj["a_1"]);
        });

       
        // function tags() {
        //     alert("sdf");
        //     inputF.value="sdf,sdfu";
        // }


        // document.getElementById("special-input").value="sdf,yuyuti";
        
        

    window.addEventListener('load', 
  function() { 
    var obj2 = {id1_1: "Part Time", id1_2: "Full Time", id1_3: "Sub Full Time", id1_4: "Dispatch", id1_5:"Outside", id1_6: "Full Possibility", id1_7: "Other", id2_1: "Long", id2_2: "Temporary", id2_3: "Other", id3_1: "Free", id3_2: "From Morning", id3_3: "From Noon", id3_4: "From Afternoon", id3_5: "Night", id3_6:"Short Time", id3_7:"Other", id4_1: "Free", id4_2: "Fixed", id4_3: "Sat Sun Only", id4_4: "Weekday", id4_5: "1-2 Days in a Week", id4_6: "3-4 Days in a Week", id4_7: "More than 4 days", id4_8: "Others", id5_1: "Indoor", id5_2:"Outdoor", id5_3: "Other", id6_1: "Food", id6_2: "Service", id6_3: "Retail", id6_4: "Office", id6_5: "Sales", id6_6: "Manufacture", id6_7 : "Shopping", id6_8: "Medical", id6_9: "Other", id7_1 : "Urgent", id7_2: "Mass", id7_3: "Side", id7_4: "Male & Female", id7_5: "Male", id7_6: "Female", id7_7: "No Experience", id7_8: "Experienced", id7_9:"House Wife", id7_10: "Senior", id7_11: "Highschool Students", id7_12: "College Students", id7_13: "Other", id8_1: "Car Motorcycle", id8_2: "Support Transportation Fee", id8_3: "Uniform", id8_4: "No CV", id8_5: "Other"};
    var obj1 = {id1_1:   "パート・アルバイト" ,  id1_2:   "正社員" ,  id1_3:   "準社員・契約社員" ,  id1_4:   "派遣社員" ,  id1_5:   "業務委託" ,  id1_6:   "正社員登用有り" ,  id1_7:   "その他" ,  id2_1:   "長期" ,  id2_2:   "短期・期間限定" ,  id2_3:   "その他" ,  id3_1:   "自由・相談可" ,  id3_2:   "早朝・朝から" ,  id3_3:   "昼から" ,  id3_4:   "夕方から・夜から" ,  id3_5:   "深夜・夜勤" ,  id3_6:   "短時間" ,  id3_7:   "その他" ,  id4_1:   "自由・相談可" ,  id4_2:   "時間固定シフト制" ,  id4_3:   "土日祝のみＯＫ" ,  id4_4:   "平日のみＯＫ" ,  id4_5:   "週１～２日ＯＫ" ,  id4_6:   "週３～４日ＯＫ" ,  id4_7:   "週４日以上～ＯＫ" ,  id4_8:   "その他" ,  id5_1:   "屋外" ,  id5_2:   "屋内" ,  id5_3:   "その他" ,  id6_1:   "フード系" ,  id6_2:   "サービス系" ,  id6_3:   "販売系" ,  id6_4:   "オフィス系" ,  id6_5:   "営業系" ,  id6_6:   "製造系" ,  id6_7:   "配送・物流系" ,  id6_8:   "医療・福祉系" ,  id6_9:   "その他" ,  id7_1:   "急募" ,  id7_2:   "大量募集" ,  id7_3:   "副業　Ｗワーク可・歓迎" ,  id7_4:   "男女　活躍中" ,  id7_5:   "男性　活躍中" ,  id7_6:   "女性　活躍中" ,  id7_7:   "未経験者　初心者　可・歓迎" ,  id7_8:   "経験者　優遇" ,  id7_9:   "主婦　主夫　歓迎" ,  id7_10:   "シルバー　歓迎" ,  id7_11:   "高校生　可・歓迎" ,  id7_12:   "学生　可　※高校生不可" ,  id7_13:   "その他" ,  id8_1:   "車・バイク通勤可" ,  id8_2:   "交通費支給" ,  id8_3:   "制服貸与" ,  id8_4:   "履歴書不要" ,  id8_5:   "その他" }
    var key_count = document.getElementById("key_words_2_count").value;
    var real_val =''
    var i =0;
    for(i=0;i< key_count; i++){
        real_val = document.getElementById("levels"+i).innerHTML;
        document.getElementById("levels"+i).innerHTML = obj1["id"+real_val];
    }
    // real_val = document.getElementById("levels"+2).innerHTML;
    // document.getElementById("levels2").innerHTML = obj1["id"+real_val]; 
    // document.getElementById("levels3").innerHTML = obj1["id1_3"]; 
  }, false);


    </script>

@endsection