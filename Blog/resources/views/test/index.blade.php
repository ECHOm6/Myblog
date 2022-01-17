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
        display: block;
        width: 100%;
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
            <li><a href="{{url('test/news')}}">新闻页</a></li>
            <li class="right"><a href="{{url('test/product')}}">产品页</a></li>
        </ul>
    </nav>
    <div class="main">
<h1>{{$data}}</h1>

<div class="box">
    <h2>弹层之美</h2>
    <p>
        layer 是一款历来都备受青睐的 Web 弹出层组件，具备全方位的解决方案，面向的是各个水平段的开发人员，您的页面会轻松地拥有丰富友好的操作体验。

在与同类组件的比较中，layer 会更能被开发者所选择。这不仅是凭「脸」取胜，而是它尽可能地在以更少的代码展现更强健的功能，且格外注重性能的提升、易用和实用性，layer 甚至还兼容了包括 IE6 在内的所有主流浏览器。其数量可观的基础属性和方法，使得您可以自定义太多您需要的风格，每一种弹层模式各具特色，广受欢迎。当然，这种「王婆卖瓜」的陈述听起来总是有点难受，因此你需要进一步了解她是否真的如你所愿。 layer 被浏览次数：13113850

layer 采用 MIT 开源许可证，是一个永久无偿的公益性项目。因着数年的坚持维护，已被运用在不计其数 Web 平台，已然成为网页弹出层的首先交互方案，几乎所处可见，其中还不乏众多知名大型网站。layer 已被国内乃至全世界至少数十万的开发者所使用过，并且它仍在与 Layui 开源项目一并稳步发展。
    </p>
</div>
    </div>
</body>
</html>