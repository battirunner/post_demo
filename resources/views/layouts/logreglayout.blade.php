
<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .nav-link-custom {
            background-color: red;
            float: right;
            color: white;
            width: 150px;
            padding: 10px 5px 10px 5px;
            text-align: center;
            margin: 5px;
            border-radius: 10px;
        }
        .all-post-content{padding-left: 10%;}
        /* .all-post-img{width: 110px; height: 120px;} */
        .cont-div h5{background: #252; color: #fff; padding: 3px 5px;}
        .cont-div{margin: 2px 8px;  border: 2px solid #141; overflow: hidden; border-radius: 5px; width: 32% !important; margin-left: 5%;}
        .all-content-info{padding-left: 7px; width: 100%!important; overflow: hidden;}
        .all-post-btn{display: inline-block;}
        .all-post-btn img{width: 102px; margin-top:2px;}
        .apb-holder{width: 112%!important;}
        .searchTerm {
            width: 90px;
            border: 2px solid #000;
            border-right: none;
            padding: 5px;
            height: 29px;
            border-radius: 5px 0 0 5px;
            outline: none;
            font-size: 13px;
            background: #f3f2cf;
            opacity: 0.9;
        }
        .searchButton {
            width: 25px;
            height: 29px;
            border: 2px solid #000;
            border-left: none;
            background: #006d2f;
            text-align: center;
            font-family: "Times New Roman";
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px!important;
            padding-left: 2px;
        }

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
        .bootstrap-tagsinput {
            min-width: 120px;
            padding: 10px;
            border: 2px solid blue;
        }
        .pagination-section {
            position: absolute;
            bottom: 0;
            left: 60%;
        }
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height: auto;} 
        }
            
            
    </style>
    @yield('extraCSS')

    <title>{{__('Post')}}</title>
</head>
<body>

    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    @yield('extraJS')
</body>
</html>