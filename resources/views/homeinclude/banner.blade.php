<div class="divider text-center">
    <img src="/assets/images/TOP52.png" class="img-responsive">
  </div>

  <div class="cover"  style="background-image: url('/storage/uploads/others/{{$admin_info->home_image}}')" >
    <div class="cover-btn">
      <!-- <img src="/assets/images/TOP_backgroundimg_sample.png" class="img-responsive"></img> -->
      <!-- <div class="row">
        <div class="col-xs-4 text-center">
          <a href="/allposts?location=1"><img src="/assets/images/TOP03.png"></a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="/allposts?location=2"><img src="/assets/images/TOP05.png"></a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="/allposts?location=3"><img src="/assets/images/TOP07.png"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-2 text-center">
          <a href="/allposts?location=4"><img src="/assets/images/TOP13.png"></a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="/allposts?location=5"><img src="/assets/images/TOP15.png"></a>
        </div>
      </div> -->
      <div class="row">
        <div class="col-xs-4 text-center form-group">
          <!-- <a href="/allposts?location=5"><img src="/assets/images/TOP15.png"></a> -->
          <select name="location" id="location" class="form-control" style="height: 45px;">
            <option value=""> {{__('All')}} </option>
            <option value="1" > 霧島・姶良 </option>
            <option value="2" > 鹿児島 </option>
            <option value="3" > 大隅・鹿屋 </option>
            <option value="4" > 宮崎・都城 </option>
            <option value="5" > 県外のお仕事 </option>
          </select>
        </div>
        <div class="col-xs-4 text-center">
          <div class="wrap">
             <div class="search">
                <input type="text" class="searchTerm" id="free_words" name="words" placeholder="フリーワード検索">
                <a href="?words=sdf" id="url_1" style="color:white;">
                <button type="submit" class="searchButton" onclick="myf()">
                  <span class="glyphicon glyphicon-search"></span>
               </button>
               </a>
             </div>
          </div>
        </div>
        <div class="col-xs-4 text-center">
          <div class="wrap">
             <div class="search">
                <!-- <input type="text" class="searchTerm" placeholder="What are you looking for?" disabled> -->
                <a href="search" style="color:white;">
                <button type="submit" class="btn btn-success btn-lg home-ban-btn" style="background-color: rgb(0,112,49);width: 150px;">
                  {{__('All Options')}}
                  <span class="glyphicon glyphicon-search" style="padding:0 0 0 5px;"></span>
               </button>
               </a>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="divider text-center">
    <img src="/assets/images/TOP52.png" class="img-responsive">
  </div>