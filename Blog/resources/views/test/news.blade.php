<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        nav{
    width: 40%;
    height: 40px;
    margin: 20px auto;
        }
        li{
            text-align: center;
            height: 60px;
            line-height: 60px;
            width: 33.3%;
            font-size: 30px;
            list-style: none;
            float: left;
            background-color: skyblue;
        }
        a:active{
        background-color: silver;
    }
        .left{
            border-top-left-radius:30%;
            border-bottom-left-radius:30%;
    
        }
        .right{
            border-top-right-radius:30%;
            border-bottom-right-radius:30%;
        }
        a{
            width: 100%;
            display: block;
            text-decoration: none;
        }
        .box{
        width: 70%;
        margin: 100px auto;
    }
    .ad{
        width: 30%;
        border-right: 2px solid skyblue;
        border-left: 2px solid skyblue;
    }
        </style>
</head>
<body>
	<nav>
        <ul>
            <li class="left"><a href="{{url('test/index')}}">主页</a></li>
            <li><a href="{{url('test/news')}}">新闻页</a></li>
            <li class="right"><a href="{{url('test/product')}}">产品页</a></li>
        </ul>
    </nav>
    <div class="main">
<h1>{{$data}}</h1>
<div class="box">
    <ul>
   <li class="ad"><p> 返璞归真</p>
身处在前端社区的繁荣之下，我们都在有意或无意地追逐。而 layui 偏偏回望当初，奔赴在返璞归真的漫漫征途，自信并勇敢着，追寻于原生态的书写指令，试图以最简单的方式诠释高效。
</li>
 <li class="ad"><p>双面体验</p>
拥有双面的不仅是人生，还有 layui。一面极简，一面丰盈。极简是视觉所见的外在，是开发所念的简易。丰盈是倾情雕琢的内在，是信手拈来的承诺。一切本应如此，简而全，双重体验。
</li>
 <li class="ad"><p>星辰大海</p>
如果眼下还是一团零星之火，那运筹帷幄之后，迎面东风，就是一场烈焰燎原吧，那必定会是一番尽情的燃烧。待，秋风萧瑟时，散作满天星辰，你看那四季轮回，正是 layui 不灭的执念。
</li>
</ul>
</div>
    </div>
</body>
</html>