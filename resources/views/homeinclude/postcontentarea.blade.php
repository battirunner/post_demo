
    <div class="content">
        <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="row content-item">
                    <a href="post/{{$post->id}}"><h5 class="content-header"> {{$post->company_name}} </h5></a>
                    <div class="col-xs-6">
                        <a href="post/{{$post->id}}"><img src="/storage/uploads/avatar/{{$post->avatar}}" style="height:140px;width:140px;" class="img-responsive"></a>
                    </div>
                    <div class="col-xs-6" style="height:150px;overflow:hidden; text-overflow: ellipsis; white-space: nowrap; text-align: left; padding-left: 0px;">

                        <p style="line-height: 14px;"><b> 職種: </b>{{$post->admin_infoA}}</p>
                        <p style="line-height: 14px;"><b> 時間: </b>{{$post->admin_infoB}}ssasdadsssssxxxzzz</p>
                        <p style="line-height: 14px;"><b> 給与: </b>{{$post->admin_infoC}}</p>
                        <p style="line-height: 14px;"><b> 休日: </b>{{$post->admin_infoD}}</p>
                        <p style="line-height: 14px;"><b> 待遇: </b>{{$post->admin_infoE}}</p>
                        <p style="line-height: 14px;"><b> 応募: </b>{{$post->admin_infoF}}</p>
                        <!-- <table >
                        <tr>wwww
                        <td style="border:1px solid;">{{__('Types of job')}}</td>
                        <td>{{$post->admin_infoA}}</td>
                        </tr>
                        <tr>
                        </tr>
                        </table> -->
                    </div>
                    <!-- <div class="col-xs-12" style="margin-top: 10px;"> <a href="#" class="btn btn-default content-btn">call</a> <a href="#" class="btn btn-default content-btn pull-right">mail</a></div> -->
                </div>
            </div> 
        @endforeach    
        </div>
        <div class="pagination-section" >
            {{$posts->links()}}
        </div>
    </div>
    