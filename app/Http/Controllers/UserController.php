<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\SearchKey;
use App\User;
use DB;
class UserController extends Controller
{
    //
    public function index()
    {
        $posts = Post::where('active_status',1)->orderBy('category', 'asc')->orderBy('priority', 'asc')->paginate(9);
        $admin_info = User::where('admin_level',1)->get()->first();
        return view('home.index',compact('posts','admin_info'));
    }
    public function showsearch()
    {
        $posts = Post::where('active_status',1)->orderBy('category', 'asc')->orderBy('priority', 'asc')->paginate(45);
        
        return view('search',compact('posts'));
    }
    public function search()
    {
        $location = request('location');
        $free_words = request('free_words');
        $search = request('tag_words');
        $checkbox_option_list = $this->optionList();
        // dd(request()->all());
        if($search)
            $search_tags = explode(',',$search);
        else
            $search_tags ='';
        
        if($location)
        {
            if($search_tags)
            {
                if($free_words)
                {
                    if($checkbox_option_list)
                    {
                        $posts = DB::table('posts')->where('active_status',1)->where('posts.location_category',$location)->where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->
                                                where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                                                where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);
                    }
                    else
                    {
                        
                        $posts = DB::table('posts')->where('active_status',1)->where('posts.location_category',$location)->
                                                    where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);

                    }

                }
                elseif($checkbox_option_list)
                {
                    $posts = DB::table('posts')->where('active_status',1)->where('posts.location_category',$location)->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->
                                                where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                                                where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);

                }
                else
                {
                    $posts = DB::table('posts')->where('active_status',1)->where('posts.location_category',$location)->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);

                    
                }
            }
            elseif($free_words)
            {
                if($checkbox_option_list)
                {
                    $posts = Post::where('active_status',1)->
                               where('location_category', $location)->
                               where('free_search_string','LIKE','%'.$free_words.'%')->
                               where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                               where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                               orderBy('posts.category', 'asc')->
                               orderBy('posts.priority', 'asc')->
                               paginate(12);

                }
                else
                {
                    $posts = Post::where('active_status',1)->
                               where('location_category', $location)->
                               where('free_search_string','LIKE','%'.$free_words.'%')->
                               orderBy('posts.category', 'asc')->
                               orderBy('posts.priority', 'asc')->
                               paginate(12);

                }

            }
            elseif($checkbox_option_list)
            {   
                $posts = Post::where('active_status',1)->
                               where('location_category', $location)->
                               where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                               where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                               orderBy('posts.category', 'asc')->
                               orderBy('posts.priority', 'asc')->
                               paginate(12);
                            //    dd($location,$checkbox_option_list,$posts);
            }
            else
            {
                
                $posts = Post::where('active_status',1)->
                                where('location_category', $location)->
                                orderBy('posts.category', 'asc')->
                                orderBy('posts.priority', 'asc')->
                                paginate(12);

            }
            
        }
        elseif($search_tags)
        {
            if($free_words)
            {
                if($checkbox_option_list)
                {
                    $posts = DB::table('posts')->where('active_status',1)->
                                                where('free_search_string','LIKE','%'.$free_words.'%')->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->
                                                where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                                                where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);

                }
                else
                {
                    $posts = DB::table('posts')->where('active_status',1)->
                                                where('free_search_string','LIKE','%'.$free_words.'%')->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);

                }

            }
            elseif($checkbox_option_list)
            {
                $posts = DB::table('posts')->where('active_status',1)->
                                            whereExists(function ($query) use ($search_tags){
                                                $query->select(DB::raw(1))
                                                        ->from('search_keys')
                                                        ->whereRaw('search_keys.post_id = posts.id')
                                                        ->whereIn('search_keys.key_word',$search_tags);
                                            })->where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                                            where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                                            orderBy('posts.category', 'asc')->
                                            orderBy('posts.priority', 'asc')->
                                            paginate(12);

            }
            else
            {
                $posts = DB::table('posts')->
                    where('active_status',1)-> 
                    whereExists(function ($query) use ($search_tags){
                    $query->select(DB::raw(1))
                          ->from('search_keys')
                          ->whereRaw('search_keys.post_id = posts.id')
                          ->whereIn('search_keys.key_word',$search_tags);
                })->orderBy('posts.category', 'asc')->
                orderBy('posts.priority', 'asc')->
                paginate(12);
                
            }

        }
        elseif($free_words)
        {
            if($checkbox_option_list)
            {
                $posts = DB::table('posts')->where('active_status',1)->
                                               where('free_search_string','LIKE','%'.$free_words.'%')->     
                                               where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                                               where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);
            }
            else
            {
                $posts = DB::table('posts')->where('active_status',1)->
                            where('free_search_string','LIKE','%'.$free_words.'%')->
                            orderBy('posts.category', 'asc')->
                            orderBy('posts.priority', 'asc')->
                            paginate(12); 

            }
        }
        elseif($checkbox_option_list && $checkbox_option_list[8])
        { 
            
            $posts = Post::where('active_status',1)->
                            where('hiring_type','&',$checkbox_option_list[0])->where('duration','&',$checkbox_option_list[1])->where('hours','&',$checkbox_option_list[2])->where('hour_shift','&',$checkbox_option_list[3])->
                                        where('location_type','&',$checkbox_option_list[4])->where('job_field','&',$checkbox_option_list[5])->where('applicant_type','&',$checkbox_option_list[6])->where('other_requirement','&',$checkbox_option_list[7])->
                                        orderBy('posts.category', 'asc')->
                                        orderBy('posts.priority', 'asc')->
                                        paginate(12);
                                        // dd($checkbox_option_list);

        }
        else
        {
            $posts = Post::where('active_status',1)->
                            orderBy('category', 'asc')->
                            orderBy('priority', 'asc')->
                            paginate(12);

            // dd($posts);

        }
        
        return view('search',compact('posts'));
        // dd(request()->all(),$checkbox_option_list,$posts->count());

        // dd($posts);
    }
    public function allposts()
    {
        $location = request('location');
        $search = request('search');
        $free_words = request('words');

        if($search)
            $search_tags = explode(',',$search);
        else
            $search_tags ='';
        
        if($location)
        {
            
            if($search_tags)
            {
                if($free_words)
                {
                    $posts = DB::table('posts')->where('active_status',1)->where('posts.location_category',$location)->
                                                 where('posts.free_search_string','LIKE','%'.$free_words.'%')->     
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);
                }
                else
                {
                    $posts = DB::table('posts')->where('active_status',1)->where('posts.location_category',$location)->
                                                whereExists(function ($query) use ($search_tags){
                                                    $query->select(DB::raw(1))
                                                          ->from('search_keys')
                                                          ->whereRaw('search_keys.post_id = posts.id')
                                                          ->whereIn('search_keys.key_word',$search_tags);
                                                })->
                                                orderBy('posts.category', 'asc')->
                                                orderBy('posts.priority', 'asc')->
                                                paginate(12);
                }
            }
            elseif($free_words)
            {   
                $posts = Post::where('active_status',1)->where('location_category', $location)->
                               where('free_search_string','LIKE','%'.$free_words.'%')->
                               orderBy('posts.category', 'asc')->
                               orderBy('posts.priority', 'asc')->
                               paginate(12);
                               
            }
            else
            {
                $posts = Post::where('active_status',1)->where('location_category', $location)->
                               orderBy('posts.category', 'asc')->
                               orderBy('posts.priority', 'asc')->
                               paginate(12);
               
            }
        }
        else if($free_words)
        {
            $posts = Post::where('active_status',1)->where('free_search_string','LIKE','%'.$free_words.'%')->
                            orderBy('posts.category', 'asc')->
                            orderBy('posts.priority', 'asc')->
                            paginate(12);
        }
        else
        {
            $posts = Post::where('active_status',1)->orderBy('posts.category', 'asc')->
            orderBy('posts.priority', 'asc')->
            paginate(12);
        }
        
        return view('posts.allposts',compact('posts'));

    }
    public function viewpost($id)
    {
        $post = Post::where('id',$id)->first();
        if($post==null)
            return redirect()->route('home');

        $search_words = SearchKey::where('post_id',$id)->where('key_type',1)->get();
        $key_words_2 = SearchKey::where('post_id',$id)->where('key_type',2)->get();
        $key_words_1 = '';
        foreach($search_words as $search_word)
        {
            
            $key_words_1=$key_words_1.','.$search_word->key_word;
        }
        $key_words_1 = ltrim($key_words_1,',');
        // dd($key_words);
        return view('posts.postshow',compact('post','key_words_1','key_words_2'));
    }
    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function contactus()
    {
        return view('home.contactus');
    }

    public function sendcontact()
    {
        // dd(request()->all());

        $name = request('company_name');
        $email = request('contact_mail');
        $subject = request('subject');
        $telephone = request('telephone');
        $content = request('message');

        \Mail::send( 'emails.contactus',['content'=> $content,'name' => $name, 'telephone' => $telephone], function($message) use ($name, $email, $subject, $telephone){
            // $message->name($name);
            $message->from($email,'Contact From Users');
            $message->to('post@q-post.jp');
            $message->subject($subject);
            // $message->content($content);

        });
        return back()->with('message','Your Message Sent Successfully');
    }
    

    public function pricelist()
    {
        $admin_info = User::where('admin_level',1)->get()->first();
        return view('home.pricelist',compact('admin_info'));
    }
    
    public function optionList()
    {   
        $option_list = array();
        $all_option = array(request('type_of_hiring'),request('duration'),request('hours'),request('hour_shift'),
        request('location_type'),request('job_type'),request('apply_type'),request('other_options'));
        $all_option_size = array();
        $all_option_size_sum =0;
                  
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
            if($option_list_temp)
            {
                $option_list[$i]=$option_list_temp;
                $all_option_size_sum+= $option_list_temp;
            }
            else
                $option_list[$i]=pow(2,count($all_option[$i]))-1;
                
        }
        $option_list[8] = $all_option_size_sum;

        return $option_list;

    }
   
    
}
