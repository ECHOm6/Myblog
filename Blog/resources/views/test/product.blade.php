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
        .left{
            border-top-left-radius:30%;
            border-bottom-left-radius:30%;
    
        }
        .right{
            border-top-right-radius:30%;
            border-bottom-right-radius:30%;
        }
        a:active{
        background-color: silver;
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
        </style>
</head>
<body>
	<nav>
        <ul>
            <li class="left"><a href="{{url('test/index')}}">主页</a></li>
            <li ><a href="{{url('test/news')}}">新闻页</a></li>
            <li class="right"><a href="{{url('test/product')}}">产品页</a></li>
        </ul>
    </nav>
    <div class="main">
<h1>{{$data}}</h1>
<div class="box">
<ul>
    <li>框架</li>
    <li>组件</li>
    <li>可视化</li>
</ul>
</div>
    </div>
</body>
</html>