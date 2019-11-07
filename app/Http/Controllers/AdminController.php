<?php

namespace App\Http\Controllers;


use File;
use Illuminate\Http\Request;
use DB;
use App\Post;
use App\SearchKey;
use App\Newsletter;
use App\User;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        // if(auth()->user()->id == 1)
        //     echo "ja jaj jajajajjjajajajaj(Heavy Metal)";
        $posts = $this->queryposts();
        return view('admin.test',compact('posts'));
    }

    public function addposting()
    {
        return view('admin.addposting');
    }
    public function checkoptionsvalue()
    {
        // $obj1 = 'id1_1:   "パート・アルバイト" ,  id1_2:   "正社員" ,  id1_3:   "準社員・契約社員" ,  id1_4:   "派遣社員" ,  id1_5:   "業務委託" ,  id1_6:   "正社員登用有り" ,  id1_7:   "その他" ,  id2_1:   "長期" ,  id2_2:   "短期・期間限定" ,  id2_3:   "その他" ,  id3_1:   "自由・相談可" ,  id3_2:   "早朝・朝から" ,  id3_3:   "昼から" ,  id3_4:   "夕方から・夜から" ,  id3_5:   "深夜・夜勤" ,  id3_6:   "短時間" ,  id3_7:   "その他" ,  id4_1:   "自由・相談可" ,  id4_2:   "時間固定シフト制" ,  id4_3:   "土日祝のみＯＫ" ,  id4_4:   "平日のみＯＫ" ,  id4_5:   "週１～２日ＯＫ" ,  id4_6:   "週３～４日ＯＫ" ,  id4_7:   "週４日以上～ＯＫ" ,  id4_8:   "その他" ,  id5_1:   "屋外" ,  id5_2:   "屋内" ,  id5_3:   "その他" ,  id6_1:   "フード系" ,  id6_2:   "サービス系" ,  id6_3:   "販売系" ,  id6_4:   "オフィス系" ,  id6_5:   "営業系" ,  id6_6:   "製造系" ,  id6_7:   "配送・物流系" ,  id6_8:   "医療・福祉系" ,  id6_9:   "その他" ,  id7_1:   "急募" ,  id7_2:   "大量募集" ,  id7_3:   "副業　Ｗワーク可・歓迎" ,  id7_4:   "男女　活躍中" ,  id7_5:   "男性　活躍中" ,  id7_6:   "女性　活躍中" ,  id7_7:   "未経験者　初心者　可・歓迎" ,  id7_8:   "経験者　優遇" ,  id7_9:   "主婦　主夫　歓迎" ,  id7_10:   "シルバー　歓迎" ,  id7_11:   "高校生　可・歓迎" ,  id7_12:   "学生　可　※高校生不可" ,  id7_13:   "その他" ,  id8_1:   "車・バイク通勤可" ,  id8_2:   "交通費支給" ,  id8_3:   "制服貸与" ,  id8_4:   "履歴書不要" ,  id8_5:   "その他"';
        $options = array('id1_1' =>    "パート・アルバイト" ,'id1_2' =>    "正社員" ,'id1_3' =>    "準社員・契約社員" ,'id1_4' =>    "派遣社員" ,'id1_5' =>    "業務委託" ,'id1_6' =>    "正社員登用有り" ,'id1_7' =>    "その他" ,'id2_1' =>    "長期" ,'id2_2' =>    "短期・期間限定" ,'id2_3' =>    "その他" ,'id3_1' =>    "自由・相談可" ,'id3_2' =>    "早朝・朝から" ,'id3_3' =>    "昼から" ,'id3_4' =>    "夕方から・夜から" ,'id3_5' =>    "深夜・夜勤" ,'id3_6' =>    "短時間" ,'id3_7' =>    "その他" ,'id4_1' =>    "自由・相談可" ,'id4_2' =>    "時間固定シフト制" ,'id4_3' =>    "土日祝のみＯＫ" ,'id4_4' =>    "平日のみＯＫ" ,'id4_5' =>    "週１～２日ＯＫ" ,'id4_6' =>    "週３～４日ＯＫ" ,'id4_7' =>    "週４日以上～ＯＫ" ,'id4_8' =>    "その他" ,'id5_1' =>    "屋外" ,'id5_2' =>    "屋内" ,'id5_3' =>    "その他" ,'id6_1' =>    "フード系" ,'id6_2' =>    "サービス系" ,'id6_3' =>    "販売系" ,'id6_4' =>    "オフィス系" ,'id6_5' =>    "営業系" ,'id6_6' =>    "製造系" ,'id6_7' =>    "配送・物流系" ,'id6_8' =>    "医療・福祉系" ,'id6_9' =>    "その他" ,'id7_1' =>    "急募" ,'id7_2' =>    "大量募集" ,'id7_3' =>    "副業　Ｗワーク可・歓迎" ,'id7_4' =>    "男女　活躍中" ,'id7_5' =>    "男性　活躍中" ,'id7_6' =>    "女性　活躍中" ,'id7_7' =>    "未経験者　初心者　可・歓迎" ,'id7_8' =>    "経験者　優遇" ,'id7_9' =>    "主婦　主夫　歓迎" ,'id7_10' =>    "シルバー　歓迎" ,'id7_11' =>    "高校生　可・歓迎" ,'id7_12' =>    "学生　可　※高校生不可" ,'id7_13' =>    "その他" ,'id8_1' =>    "車・バイク通勤可" ,'id8_2' =>    "交通費支給" ,'id8_3' =>    "制服貸与" ,'id8_4' =>    "履歴書不要" ,'id8_5' =>    "その他");
        
    }
    
    public function postnewadd()
    {
        // dd(request()->all());
        $options_value = array('id1_1' =>    "パート・アルバイト" ,'id1_2' =>    "正社員" ,'id1_3' =>    "準社員・契約社員" ,'id1_4' =>    "派遣社員" ,'id1_5' =>    "業務委託" ,'id1_6' =>    "正社員登用有り" ,'id1_7' =>    "その他" ,'id2_1' =>    "長期" ,'id2_2' =>    "短期・期間限定" ,'id2_3' =>    "その他" ,'id3_1' =>    "自由・相談可" ,'id3_2' =>    "早朝・朝から" ,'id3_3' =>    "昼から" ,'id3_4' =>    "夕方から・夜から" ,'id3_5' =>    "深夜・夜勤" ,'id3_6' =>    "短時間" ,'id3_7' =>    "その他" ,'id4_1' =>    "自由・相談可" ,'id4_2' =>    "時間固定シフト制" ,'id4_3' =>    "土日祝のみＯＫ" ,'id4_4' =>    "平日のみＯＫ" ,'id4_5' =>    "週１～２日ＯＫ" ,'id4_6' =>    "週３～４日ＯＫ" ,'id4_7' =>    "週４日以上～ＯＫ" ,'id4_8' =>    "その他" ,'id5_1' =>    "屋外" ,'id5_2' =>    "屋内" ,'id5_3' =>    "その他" ,'id6_1' =>    "フード系" ,'id6_2' =>    "サービス系" ,'id6_3' =>    "販売系" ,'id6_4' =>    "オフィス系" ,'id6_5' =>    "営業系" ,'id6_6' =>    "製造系" ,'id6_7' =>    "配送・物流系" ,'id6_8' =>    "医療・福祉系" ,'id6_9' =>    "その他" ,'id7_1' =>    "急募" ,'id7_2' =>    "大量募集" ,'id7_3' =>    "副業　Ｗワーク可・歓迎" ,'id7_4' =>    "男女　活躍中" ,'id7_5' =>    "男性　活躍中" ,'id7_6' =>    "女性　活躍中" ,'id7_7' =>    "未経験者　初心者　可・歓迎" ,'id7_8' =>    "経験者　優遇" ,'id7_9' =>    "主婦　主夫　歓迎" ,'id7_10' =>    "シルバー　歓迎" ,'id7_11' =>    "高校生　可・歓迎" ,'id7_12' =>    "学生　可　※高校生不可" ,'id7_13' =>    "その他" ,'id8_1' =>    "車・バイク通勤可" ,'id8_2' =>    "交通費支給" ,'id8_3' =>    "制服貸与" ,'id8_4' =>    "履歴書不要" ,'id8_5' =>    "その他");

        $post = new Post;

        $checkbox_option_list = $this->optionList();
        $checkbox_option_tag = $this->optionToTag();
        $post->category = request('category');
        $post->priority = (int)request('priority_number');
        $post->company_name = request('company_name');
        $post->location_category = request('location_category');
        $post->address = request('address');
        $post->fax = request('fax')?request('fax'):'';
        $post->contact_person = request('contact_person');
        $post->url = request('url') ? request('url') : '';
        $post->phone = request('phone_number')?request('phone_number') : '';
        $post->mail = request('mail_address')? request('mail_address') : '';
        $post->hiring_type = $checkbox_option_list[0];
        $post->duration = $checkbox_option_list[1];
        $post->hours = $checkbox_option_list[2];
        $post->hour_shift = $checkbox_option_list[3];
        $post->location_type = $checkbox_option_list[4];
        $post->job_field = $checkbox_option_list[5];
        $post->applicant_type = $checkbox_option_list[6];
        $post->other_requirement = $checkbox_option_list[7];
        $post->admin_infoA = request('occupation');
        $post->admin_infoB = request('time');
        $post->admin_infoC = request('salary');
        $post->admin_infoD = request('holiday');
        $post->admin_infoE = request('treatment');
        $post->admin_infoF = request('apply');
        $post->detail_info = request('detail_info');
        
        $image_avatar = request()->file('avatar_image');
        $image_banner = request()->file('banner_image');
        // dd($post->id);
        if($image_avatar)
        {
           
            if($post->avatar !== 'default.png') 
            {
                File::delete('uploads/avatar/' . $post->avatar);
            }
            $filename_avatar = uniqid('img_') . "." . strtolower($image_avatar->getClientOriginalExtension());
            // $path = public_path() . "/uploads/avatar/" . $filename_avatar;
            // $image_avatar->move('uploads/avatar', $filename_avatar);
            // $file_return = file_put_contents($path, $image_avatar);
            $path = request()->file('avatar_image')->storeAs('public/uploads/avatar',$filename_avatar);
            $post->avatar = $filename_avatar;
            // dd($path);
        }
        if($image_banner)
        {
            if($post->banner_image !== 'default.png') 
            {
                File::delete('uploads/banner/' . $post->banner_image);
            }
            $filename_banner = uniqid('img_') . "." . strtolower($image_banner->getClientOriginalExtension());
            // $path = public_path() . "/uploads/banner/" . $filename_banner;
            // $image_banner->move('uploads/banner', $filename_banner);
            // file_put_contents($path, $image_banner);
            $path = request()->file('banner_image')->storeAs('public/uploads/banner',$filename_banner);
            $post->banner_image = $filename_banner;
        }
        
        $all_tag_input  = request('tag_words');
        $checkbox_option_tag=ltrim($checkbox_option_tag,',');
        $search_keys_1 = explode(',',$all_tag_input);
        $search_keys_2 = explode(',',$checkbox_option_tag);
        // dd($search_keys);
        $checkbox_option_search = ''; 

        foreach($search_keys_1 as $search_key)
        {
            $checkbox_option_search = $checkbox_option_search.$search_key.',';
        }
        foreach($search_keys_2 as $search_key)
        {
            $checkbox_option_search = $checkbox_option_search.$options_value['id'.$search_key].',';
        }
        
        $post->free_search_string = request('detail_info').','.request('company_name').','.$checkbox_option_search;
        
        $post->save();

        foreach($search_keys_1 as $search_key)
        {
            // dd($search_key);
            $key = new SearchKey;
            $key->post_id = $post->id;
            $key->key_word = $search_key;
            $key->key_type = 1;
            $key->save();
        }
        foreach($search_keys_2 as $search_key)
        {
            // dd($search_key);
            $key = new SearchKey;
            $key->post_id = $post->id;
            $key->key_word = $search_key;
            $key->key_type = 2;
            $key->save();
            
        }
        
        
        // dd($post->free_search_string);
        

        return back()->with('message', 'Post Saved Successfully!');
        
    }

    public function alllist()
    {
        $posts = Post::paginate(10);
        return view('admin.test',compact('posts'));
    }

    public function addpricelist()
    {
        return view('admin.addpricelist');
    }

    public function uploadpricelist()
    {
        $image = request('price_image');
        $image_mob = request('price_image_mob');
        $image_home = request('home_image');
        
        $admin_info = User::where('admin_level','1')->get()->first();
        
        
        
        if($image)
        {
            
            File::delete('storage/uploads/others/'.$admin_info->price_image);

            $filename = "pricelist" .".". strtolower($image->getClientOriginalExtension());
            $path = request()->file('price_image')->storeAs('public/uploads/others',$filename);
            $admin_info->price_image = $filename;
            
        }
        if($image_mob)
        {   
            File::delete('storage/uploads/others/'.$admin_info->price_image_mobile);
            
            $filename = "pricelist_mobile" .".". strtolower($image_mob->getClientOriginalExtension());
            $path = request()->file('price_image_mob')->storeAs('public/uploads/others',$filename);
            $admin_info->price_image_mobile = $filename;

        }
        if($image_home)
        {
            File::delete('storage/uploads/others/'.$admin_info->home_image);
            
            $filename = "homebanner" .".". strtolower($image_home->getClientOriginalExtension());
            $path = request()->file('home_image')->storeAs('public/uploads/others',$filename);
            $admin_info->home_image = $filename;
            $admin_info->save();
            return redirect()->route('home');
            
        }

        $admin_info->save();

        return redirect()->route('pricelist');
    }
    public function allposts()
    {
        $posts = $this->queryposts();

        return view('admin.allposts',compact('posts'));
    }
    public function allpostslist()
    {
        $posts = $this->queryposts();

        return view('admin.test',compact('posts'));
    }

    public function queryposts()
    {
        $location = request('location');
        $search = request('search');
        // $search_tags = array('ret','sdaf','qwe');
        $category = request('category');
        $free_words = request('words');
        if($search)
            $search_tags = explode(',',$search);
        else
            $search_tags ='';
        // dd($search_tags);
        // $result_header_1 = 'All Posts';
        // $result_header_2 = 'Post For Area '
        if($location)
        {
            
            if($search_tags)
            {
                if($free_words)
                {
                    if($category)
                    {
                        $posts = DB::table('posts')->where('posts.category', $category)->where('posts.location_category',$location)->
                                                where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                                            whereExists(function ($query) use ($search_tags){
                                                $query->select(DB::raw(1))
                                                        ->from('search_keys')
                                                        ->whereRaw('search_keys.post_id = posts.id')
                                                        ->whereIn('search_keys.key_word',$search_tags);
                                            })->paginate(12);

                    }
                    else
                    {
                        $posts = DB::table('posts')->where('posts.location_category',$location)->
                        where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                       whereExists(function ($query) use ($search_tags){
                           $query->select(DB::raw(1))
                                 ->from('search_keys')
                                 ->whereRaw('search_keys.post_id = posts.id')
                                 ->whereIn('search_keys.key_word',$search_tags);
                       })->paginate(12);
                    }
                }
                elseif($category)
                {
                    $posts = DB::table('posts')->where('posts.category',$category)->where('posts.location_category',$location)->
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->paginate(12);
                }
                else
                {
                    // $posts = Post::with('searchkey')->where('location_category', $location)->
                    //             whereIn('key_word', $search_tags)->get();

                            // $posts=Post::where('location_category', $location)->with(['searchkey.key_word' => function ($query) use ($search_tags) { 
                                
                            //         $query->whereIn('key_word', $search_tags) ;
                            //  }])->get();
                    // $posts = DB::table('posts')->join('search_keys','posts.id','search_keys.post_id')
                    //                             ->where('posts.location_category',$location)
                    //                             ->whereIn('search_keys.key_word',$search_tags)
                    //                             ->get();
                    
                    $posts = DB::table('posts')->where('posts.location_category',$location)->
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->paginate(12);
                }
            }
            elseif($free_words)
            {   
                if($category)
                {   
                    $posts = Post::where('category',$category)->where('location_category', $location)->
                               where('free_search_string','LIKE','%'.$free_words.'%')->
                               paginate(12);
                }
                else
                {
                    $posts = Post::where('location_category', $location)->
                                where('free_search_string','LIKE','%'.$free_words.'%')->
                                paginate(12);
                }
            }
            elseif($category)
            {
                $posts = Post::where('category',$category)->where('location_category',$location)->paginate(12);
            }
            else
            {
                $posts = Post::where('location_category', $location)->paginate(12);
               
            }
        }
        elseif($search_tags)
        {
            if($free_words)
            {
                if($category)
                {
                    $posts = DB::table('posts')->where('posts.category',$category)->where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                                            whereExists(function ($query) use ($search_tags){
                                                $query->select(DB::raw(1))
                                                        ->from('search_keys')
                                                        ->whereRaw('search_keys.post_id = posts.id')
                                                        ->whereIn('search_keys.key_word',$search_tags);
                                            })->paginate(12);

                }
                else
                {
                    $posts = DB::table('posts')->where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                            ->from('search_keys')
                                                            ->whereRaw('search_keys.post_id = posts.id')
                                                            ->whereIn('search_keys.key_word',$search_tags);
                                                })->paginate(12);
                }
            }
            elseif($category)
            {
                $posts = DB::table('posts')->where('posts.category',$category)->whereExists(function ($query) use ($search_tags){
                    $query->select(DB::raw(1))
                            ->from('search_keys')
                            ->whereRaw('search_keys.post_id = posts.id')
                            ->whereIn('search_keys.key_word',$search_tags);
                            })->paginate(12);
            }
            else
            {
                
                $posts = DB::table('posts')->whereExists(function ($query) use ($search_tags){
                                                $query->select(DB::raw(1))
                                                        ->from('search_keys')
                                                        ->whereRaw('search_keys.post_id = posts.id')
                                                        ->whereIn('search_keys.key_word',$search_tags);
                                            })->paginate(12);
            }
        }
        elseif($free_words)
        {
            if($category)
            {
                $posts = Post::where('category',$category)->
                               where('posts.free_search_string','LIKE','%'.$free_words.'%')->paginate(12);    
            }
            else
            {
                $posts = Post::where('posts.free_search_string','LIKE','%'.$free_words.'%')->paginate(12);
            }

        }
        elseif($category)
        {
            $posts = Post::where('category',$category)->paginate(12);
        }
        else
        {
            $posts = Post::orderBy('category')->orderBy('priority')->paginate(45);
        }
        
        
        return $posts;
    }
    public function showedit()
    {
        if(!request('id'))
        {
            // $this->allposts();
            return redirect()->route('admin.allposts');
        }
        $id=request('id');
        $post = Post::where('id',$id)->get()->first();
        $tag_words = SearchKey::where('post_id',$id)->where('key_type',1)->get();
        $tag_word_list = '';
        foreach($tag_words as $tag_word)
        {
            $tag_word_list.=','.$tag_word->key_word;
        }
        $tag_word_list =ltrim($tag_word_list,',');

        return view('admin.edit.editpost',compact('post','tag_word_list'));
    }
    public function showeditlist()
    {
        // $posts = Post::
    }

    public function editpostorder()
    {
        
        // dd(request()->all());
        // $posts = Post::
        // $id = request()
        $count = count(request('post_id'));
        $id = request('post_id');
        $category = request('category_edit');
        $priority = request('priority_edit');
        for($i=0;$i<$count;$i++)
        {
            $post = Post::where('id',$id[$i])->get()->first();
            $post->category = $category[$i];
            $post->priority = $priority[$i];
            $post->save();
        }
        return redirect()->route('admin.dashboard')->with('message','Order Edit Successfull');
    }

    public function editpost()
    {
        $options_value = array('id1_1' =>    "パート・アルバイト" ,'id1_2' =>    "正社員" ,'id1_3' =>    "準社員・契約社員" ,'id1_4' =>    "派遣社員" ,'id1_5' =>    "業務委託" ,'id1_6' =>    "正社員登用有り" ,'id1_7' =>    "その他" ,'id2_1' =>    "長期" ,'id2_2' =>    "短期・期間限定" ,'id2_3' =>    "その他" ,'id3_1' =>    "自由・相談可" ,'id3_2' =>    "早朝・朝から" ,'id3_3' =>    "昼から" ,'id3_4' =>    "夕方から・夜から" ,'id3_5' =>    "深夜・夜勤" ,'id3_6' =>    "短時間" ,'id3_7' =>    "その他" ,'id4_1' =>    "自由・相談可" ,'id4_2' =>    "時間固定シフト制" ,'id4_3' =>    "土日祝のみＯＫ" ,'id4_4' =>    "平日のみＯＫ" ,'id4_5' =>    "週１～２日ＯＫ" ,'id4_6' =>    "週３～４日ＯＫ" ,'id4_7' =>    "週４日以上～ＯＫ" ,'id4_8' =>    "その他" ,'id5_1' =>    "屋外" ,'id5_2' =>    "屋内" ,'id5_3' =>    "その他" ,'id6_1' =>    "フード系" ,'id6_2' =>    "サービス系" ,'id6_3' =>    "販売系" ,'id6_4' =>    "オフィス系" ,'id6_5' =>    "営業系" ,'id6_6' =>    "製造系" ,'id6_7' =>    "配送・物流系" ,'id6_8' =>    "医療・福祉系" ,'id6_9' =>    "その他" ,'id7_1' =>    "急募" ,'id7_2' =>    "大量募集" ,'id7_3' =>    "副業　Ｗワーク可・歓迎" ,'id7_4' =>    "男女　活躍中" ,'id7_5' =>    "男性　活躍中" ,'id7_6' =>    "女性　活躍中" ,'id7_7' =>    "未経験者　初心者　可・歓迎" ,'id7_8' =>    "経験者　優遇" ,'id7_9' =>    "主婦　主夫　歓迎" ,'id7_10' =>    "シルバー　歓迎" ,'id7_11' =>    "高校生　可・歓迎" ,'id7_12' =>    "学生　可　※高校生不可" ,'id7_13' =>    "その他" ,'id8_1' =>    "車・バイク通勤可" ,'id8_2' =>    "交通費支給" ,'id8_3' =>    "制服貸与" ,'id8_4' =>    "履歴書不要" ,'id8_5' =>    "その他");

        $post = Post::where('id',request('id'))->get()->first();

        $checkbox_option_list = $this->optionList();
        $checkbox_option_tag = $this->optionToTag();
        $post->category = request('category');
        $post->priority = request('priority_number');
        $post->company_name = request('company_name');
        $post->location_category = request('location_category');
        $post->address = request('address');
        $post->fax = request('fax');
        $post->contact_person = request('contact_person');
        $post->url = request('url');
        $post->phone = request('phone_number');
        $post->mail = request('mail_address');
        $post->hiring_type = $checkbox_option_list[0];
        $post->duration = $checkbox_option_list[1];
        $post->hours = $checkbox_option_list[2];
        $post->hour_shift = $checkbox_option_list[3];
        $post->location_type = $checkbox_option_list[4];
        $post->job_field = $checkbox_option_list[5];
        $post->applicant_type = $checkbox_option_list[6];
        $post->other_requirement = $checkbox_option_list[7];
        $post->admin_infoA = request('occupation');
        $post->admin_infoB = request('time');
        $post->admin_infoC = request('salary');
        $post->admin_infoD = request('holiday');
        $post->admin_infoE = request('treatement');
        $post->admin_infoF = request('apply');
        $post->detail_info = request('detail_info');
        
        $image_avatar = request()->file('avatar_image');
        $image_banner = request()->file('banner_image');
        // dd($image_avatar);
        if($image_avatar)
        {
           
            if($post->avatar !== 'default.png') 
            {
                File::delete('uploads/avatar/' . $post->avatar);
            }
            $filename_avatar = uniqid('img_') . "." . strtolower($image_avatar->getClientOriginalExtension());
            // $path = public_path() . "/uploads/avatar/" . $filename_avatar;
            // $image_avatar->move('uploads/avatar', $filename_avatar);
            // $file_return = file_put_contents($path, $image_avatar);
            $path = request()->file('avatar_image')->storeAs('public/uploads/avatar',$filename_avatar);
            $post->avatar = $filename_avatar;
            // dd($path);
        }
        if($image_banner)
        {
            if($post->banner_image !== 'default.png') 
            {
                File::delete('uploads/banner/' . $post->banner_image);
            }
            $filename_banner = uniqid('img_') . "." . strtolower($image_banner->getClientOriginalExtension());
            // $path = public_path() . "/uploads/banner/" . $filename_banner;
            // $image_banner->move('uploads/banner', $filename_banner);
            // file_put_contents($path, $image_banner);
            $path = request()->file('banner_image')->storeAs('public/uploads/banner',$filename_banner);
            $post->banner_image = $filename_banner;
        }

        $all_tag_input  = request('tag_words');
        $checkbox_option_tag=ltrim($checkbox_option_tag,',');
        $search_keys_1 = explode(',',$all_tag_input);
        $search_keys_2 = explode(',',$checkbox_option_tag);
        // dd($search_keys);

        $checkbox_option_search = ''; 

        foreach($search_keys_1 as $search_key)
        {
            $checkbox_option_search = $checkbox_option_search.$search_key.',';
        }
        foreach($search_keys_2 as $search_key)
        {
            $checkbox_option_search = $checkbox_option_search.$options_value['id'.$search_key].',';
        }
        
        $post->free_search_string = request('detail_info').','.request('company_name').','.$checkbox_option_search;

        $post->save();

        $key_1 = SearchKey::where('post_id',request('id'))->where('key_type',1)->get();
        foreach($key_1 as $key)
        {
            $key->delete();
        }
        
        $key_2 = SearchKey::where('post_id',request('id'))->where('key_type',2)->get();
        foreach($key_2 as $key)
        {
            $key->delete();
        }
      
        foreach($search_keys_1 as $search_key)
        {
            // dd($search_key);
            $key = new SearchKey;
            $key->post_id = $post->id;
            $key->key_word = $search_key;
            $key->key_type = 1;
            $key->save();
        }
        foreach($search_keys_2 as $search_key)
        {
            // dd($search_key);
            $key = new SearchKey;
            $key->post_id = $post->id;
            $key->key_word = $search_key;
            $key->key_type = 2;
            $key->save();
        }
        // dd($search_keys_1,$search_keys_2);
        return redirect()->route('viewpost',request('id'));
        // dd(request()->all());
    }

    public function optionList()
    {   
        $option_list = array();
        $all_option = array(request('type_of_hiring'),request('duration'),request('hours'),request('hour_shift'),
        request('location_type'),request('job_type'),request('apply_type'),request('other_options'));
        $all_option_size = array();
        for($i=0;$i<8;$i++)
            $all_option_size[$i] = count($all_option[$i]);

        for($i=0;$i<8;$i++)
        {
            $option_list_temp = 0;
            for($j=0;$j<count($all_option[$i]);$j++)
            {
                if($all_option[$i][$j])
                {
                    $option_list_temp+=pow(2,$j);
                }
            }
            $option_list[$i]=$option_list_temp;
        }

        return $option_list;

    }

    public function optionToTag()
    {
        $option_list = '';
        $all_option = array(request('type_of_hiring'),request('duration'),request('hours'),request('hour_shift'),
        request('location_type'),request('job_type'),request('apply_type'),request('other_options'));
        

        for($i=0;$i<8;$i++)
        {
            $option_list_temp = '';
            for($j=0;$j<count($all_option[$i]);$j++)
            {
                if($all_option[$i][$j])
                {
                    $option_list_temp=$option_list_temp.','.$all_option[$i][$j];
                }
            }
            $option_list.=$option_list_temp;
        }
        // $option_list = ltrim($option_list, ',');
        // dd($option_list);

        return $option_list;

    }

    public function deletepost($id)
    {
        $post = Post::where('id',$id)->get()->first();
        if($post)
        {
            $post->delete();

            $key_words = Searchkey::where('post_id',$id)->get();
            if($key_words)
            {
                foreach($key_words as $key_word)
                {
                    $key_word->delete();
                }
            }
            $success_msg = 'Post Deleted';

        }
        else
        {
            $success_msg = 'Invalid Post Id, No such Post Exist';
        }
        
        return redirect()->route('admin.allposts')->with('message', $success_msg);
    }

    public function postaction($id)
    {
        $post = Post::where('id',$id)->get()->first();
        if($post)
        {
            if($post->active_status)
            {
                $post->active_status = 0;
                $success_msg = 'Post Blocked';
            }
            elseif(!$post->active_status)
            {
                $post->active_status = 1;
                $success_msg = 'Post Active';
            }
            $post->save();
            
        }
        else
        {
            $success_msg = 'Invalid Post Id, No such Post Exist';
        }

        return redirect()->back()->with('message', $success_msg);
    }
    public function application()
    {
        return view('home.applicationcontact');
    }
    public function applicationcontact()
    {
        // dd(request()->all());
        $name = request('company_name');
        $contact_person = request('contact_person');
        $address = request('address');
        $email = request('contact_mail');
        $subject = request('subject');
        $telephone = request('telephone');
        $content = request('application_text');
        $fax = request('fax');
        \Mail::send('emails.application',['content'=> $content,'name' => $name, 'telephone' => $telephone, 'contact_person' => $contact_person, 'address' => $address, 'email' => $email, 'fax' => $fax ], function($message) use ($email, $subject ){
            // $message->name($name);
            $message->from($email,'Application Contact');
            $message->to('post@q-post.jp');
            $message->subject($subject);
            // $message->content($content);

        });
        return back()->with('message','Your Message Sent Successfully');
        
    }
    public function showaddnewsletter()
    {
        return view('admin.addnewsletter');
    }
    public function newsletters()
    {
        $newsletters = Newsletter::paginate(20);
        if(request('edit'))
        {
            $newsletter_edit = Newsletter::where('id',request('edit'))->get()->first();
            return view('admin.newsletters',compact('newsletters','newsletter_edit'));
        }
       
        return view('admin.newsletters',compact('newsletters'));
    } 
    public function shownewsletter()
    {
        if(request('id'))
            $news = Newsletter::where('id',request('id'))->get()->first();
        else    
            $news = Newsletter::orderBy('created_at','desc')->get()->first();
        $newsletters = Newsletter::get();
        return view('home.shownewsletter',compact('news','newsletters'));
    }
    public function addnewsletter()
    {
        // dd(request('mytextarea'));
        $images = request('mytextarea');
        $lastPos = 0;
        $firstPos = 0;
        $needle = 'src="';
        $needle2 = '" alt=""';
        $firstpositions = array();
        $lastpostions = array();
        // $image_file = array();
        $image_name = '';
        $image_b64 = array();
        $i=0;
        while (($firstPos = strpos($images, $needle, $firstPos))!== false) 
        {
            $firstpositions[] = $firstPos;
            $firstPos = $firstPos + strlen($needle);
            $lastPos = strpos($images, $needle2, $lastPos);
            $lastpositions[] = $lastPos; 
            $lastPos = $lastPos + strlen($needle2);
            

            // }
            // foreach($firstpositions as $position)
            // {
            //     echo $position."  ";
            // }
            // echo "<br>";
            // foreach($lastpositions as $position)
            // {
            //     echo $position."  ";
            // }
            // for($i = 0 ; $i <count($firstpositions);$i++)
            // {
            $firstpositions[$i]+=strlen($needle);
            $image_b64[$i] = substr($images,$firstpositions[$i],$lastpositions[$i]-$firstpositions[$i]);
            // dd($image_b64[$i]);
            $image_file = $image_b64[$i];
            list($type, $image_file) = explode(';', $image_file);
            list(, $image_file)      = explode(',', $image_file);
            list(, $type) = explode('/',$type);
            // dd($type);
            $image = base64_decode($image_file);
        
                
                $filename = uniqid('img_') . "." . $type;
                
                $path = public_path() . '/uploads/test/' . $filename;
   
                // $path = $image->storeas('public/uploads/test',$filename);
    
    
                file_put_contents($path, $image);
            $images = substr_replace($images,'/uploads/test/' . $filename,$firstpositions[$i],$lastpositions[$i]-$firstpositions[$i]);

            $image_name = $image_name.','.$filename;
            // dd($images);
            $i++;
            // $image_file = base64_decode($image_b64[$i]);
            // dd($image_file);
            // $filename = uniqid('img_') . "." . strtolower($image_file->getClientOriginalExtension());
            // $filename = 'test.png';
            // $path = $image_file->storeAs('public/uploads/test',$filename);
            
        }
        $image_name = ltrim(',',$image_name);
        // dd($images);
        $news = new Newsletter;
        $news->main_title = request('main_title');
        $news->newsletter_heading = request('main_title');
        $news->newsletter_content = $images;
        $news->priority = 1;
        $news->images_string = $image_name;
        $news->images_count = $i;
        $news->save();
        // dd($images);
        // dd($imagefile);
        return redirect()->route('shownewsletter');
        
        
    }
    public function editnewsletter()
    {   
        $newsletter = Newsletter::where('id',request('id'))->get()->first();
        $newsletter->main_title = request('main_title');
        // $newsletter->
        
    }
    

    
}
