
<div class="post-show-bottom">
<p>{{__('All checkbox selected')}} </p> 
  <input type="hidden" id="key_words_2_count" value="{{count($key_words_2)}}">
  @for($i=0; $i < count($key_words_2) ; $i++)
      
      <span id="levels{{$i}}" class="category-lvl">{{__($key_words_2[$i]["key_word"])}}</span>
  @endfor
</div>
<script>
    
  //   window.addEventListener('load', 
  // function() { 
  //   document.getElementById("levels5").innerHTML = obj1["id-1_1"]; 
  // }, false);
</script>
