<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logup</title>
    <script src="{{url('/js/jQuery.js')}}"></script>
    <link rel="stylesheet"  href="/home/css/style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #app{
            /* border: 1px solid red; */
            width: 800px;
            height: 300px;
            margin: 100px auto;
        }
        li{
            width: 50%;
            list-style: none;
            float: left;
            /* border: 1px solid gainsboro; */
        }
        p{
            text-align: center;
            font-size: 40px;
width: 100%;
line-height: 50px;
background-color:skyblue; 
        }
        .q{
            background: rgb(170, 180, 197);
        }
        ul{
            
            margin: 0;
            position: relative;
            /* border: 1px solid red; */
        }
        .a{
            position: absolute;
            top:100px;
            left: 50px;
            display: none;
        }
        .b{
            /* padding: 20px; */
            /* border: 1px solid black; */
            width: 90%;
            margin: 0 auto;
            display:block;
        }
        .dowebok{
            margin: 180px 0;
        }
    </style>
    
</head>
<body>
	<div id="app">
        <ul>
            <li>
                <p class="q">已有账号</p>
                <div class="a b">
                    <div class="dowebok">
                        <div class="container">
                            <div class="left">
                                <div class="login">登录</div>
                                <div class="eula">欢迎光临，请输入您的电子邮箱和密码以登录！</div>
                                @foreach($errors->all() as $message)
                                <span style="color: red">{{$message}}</span>
                            
                                @endforeach
                            </div>
                           
                            <div class="right">
                                <svg viewBox="0 0 320 300">
                                    <defs>
                                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307"
                                            y2="193.49992" gradientUnits="userSpaceOnUse">
                                            <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                                            <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
                                        </linearGradient>
                                    </defs>
                                    <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                                </svg>
                                <div class="form">
                                    <form method="POST" action="{{route('log')}}">
                                    <label for="email">电子邮件</label>
                                    <input name="email" type="email" id="email">
                                    <label for="password">密码</label>
                                    <input name="passwd" type="password" id="password">
                                    <input type="submit" id="submit" value="登录">
                                    {{csrf_field()}}
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="/home/js/anime.min.js"></script>
                    <script src="/home/js/index.js"></script>
                </div>
            </li>
            <li>
                <p>注册账号</p>
                <div class="a">
                    <div class="dowebok">
                        <div class="container">
                            <div class="left">
                                <div class="login">注册</div>
                                <div class="eula">欢迎注册，请填写您的相关信息以注册！</div>
                            </div>
                            <div class="right">
                                <svg viewBox="0 0 320 300">
                                    <defs>
                                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307"
                                            y2="193.49992" gradientUnits="userSpaceOnUse">
                                            <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                                            <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
                                        </linearGradient>
                                    </defs>
                                    <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                                </svg>
                                <div class="form" style="width:350px;background:rgb(101, 168, 180);height:400px;">
                                    <form method="POST" enctype="multipart/form-data" action="{{route('register')}}">
                                    <label for="name">用户名</label>
                                    <input name="name" type="text" id="name">
                                    <label for="phone">电话</label>
                                    <input type="text" name="phone" id="phone">
                                    <label for="emai">邮箱</label>
                                    <input type="email" name="email" id="emai">
                                    <label for="password">密码</label>
                                    <input type="password" name="passwd" id="passwword">
                                    {{csrf_field()}}
                                    <input type="submit"  value="注册">
                               
                                </div>
                                <div class="" style="width:250px;height:260px;margin:50px 390px;background:rgb(132, 202, 214);">
                                    <label for="avatar">头像</label>
                                    <input type="file"  name="avatar" id="avatar"/>
                                </div> </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <script src="/home/js/anime.min.js"></script>
                    <script src="/home/js/index.js"></script>
    <script>
        $("p").click(function(){
            $(this).addClass('q');
            $(this).parents().siblings().children('p').removeClass('q');
            $(this).siblings("div").addClass('b');
            $(this).parents().siblings().children('div').removeClass('b');
        });
    </script>
</body>
</html>