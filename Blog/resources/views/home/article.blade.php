<!--
    
 @Name：不落阁整站模板源码
 @Author：Absolutely
 @Site：http://www.lyblogs.cn

 -->

 <!DOCTYPE html>

 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
     <meta http-equiv="Content-Language" content="zh-CN">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
     <title>Blog-文章专栏</title>
     <link rel="shortcut icon" href="/home/images/Logo_40.png" type="image/x-icon">
     <!--Layui-->
     <link href="/home/plug/layui/css/layui.css" rel="stylesheet" />
     <!--font-awesome-->
     <link href="/home/plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
     <!--全局样式表-->
     <link href="/home/css/global.css" rel="stylesheet" />
     <!--本页样式表-->
     <link href="/home/css/article.css" rel="stylesheet" />
     <style type="text/css">
        /*#pull_right{
            text-align:center;
        }*/
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
    </style>
 </head>
 <body>
     <!-- 导航 -->
     <nav class="blog-nav layui-header">
         <div class="blog-container">
             <!-- QQ互联登陆 -->
             <a href="javascript:;" class="blog-user">
                 <i class="fa fa-qq"></i>
             </a>
             <a href="javascript:;" class="blog-user layui-hide">
                 <img src="../images/Absolutely.jpg" alt="Absolutely" title="Absolutely" />
             </a>
             <!-- 不落阁 -->
             <a class="blog-logo" href="{{url('home/index')}}">Blog</a>
             <!-- 导航菜单 -->
             <ul class="layui-nav" lay-filter="nav">
                <li class="layui-nav-item ">
                    <a href="{{url('/home/index')}}"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
                </li>
                <li class="layui-nav-item layui-this">
                    <a href="{{url('/home/article')}}"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
                </li>
                <li class="layui-nav-item">
                    <a href="{{url('/home/resource')}}"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
                </li>
                <li class="layui-nav-item">
                    <a href="{{url('/home/timeline')}}"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;点点滴滴</a>
                </li>
                <li class="layui-nav-item">
                    <a href="{{url('/home/about')}}"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
                </li>
             </ul>
             <!-- 手机和平板的导航开关 -->
             <a class="blog-navicon" href="javascript:;">
                 <i class="fa fa-navicon"></i>
             </a>
         </div>
     </nav>
     <!-- 主体（一般只改变这里的内容） -->
     <div class="blog-body">
         <div class="blog-container">
             <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
                 <a href="{{url('home/index')}}" title="网站首页">网站首页</a>
                 <a><cite>文章专栏</cite></a>
             </blockquote>
             <div class="blog-main">
                 <div class="blog-main-left">
                     <div class="shadow" style="text-align:center;font-size:16px;padding:40px 15px;background:#fff;margin-bottom:15px;">
                         未搜索到与【<span style="color: #FF5722;">keywords</span>】有关的文章，随便看看吧！
                     </div>
                    
                     @foreach($data as $val)
                     <div class="article shadow" style="height:auto;">
                         <div class="article-left">
                             <img src="/home/images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                         </div>
                         <div class="article-right">
                             <div class="article-title" style="font-weight:bold">
                                 <a href="{{url('/home/detail',$val->id)}}">{{$val->title}}
                                </a>
                             </div>
                             <div class="article-abstract" style="height: 88px;overflow: hidden;text-overflow: ellipsis;">
                                 {{$val->content}}
                                
                             </div>
                         </div>
                         <div class="clear"></div>
                         <div class="article-footer">
                             <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$val->created_at}}</span>
                             <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$val->author}}</span>
                             <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">{{$val->category}}</a></span>
                             <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                             <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                         </div>
                     </div>
                     @endforeach
                     <div id="pull_right">
                        <div class="pull-right">
                           {{$data->links()}}<!-- 分页链接 -->
                        </div>
                  </div>
                 </div>
                
                 <div class="blog-main-right">
                     <div class="blog-search">
                         <form class="layui-form" action="">
                             <div class="layui-form-item">
                                 <div class="search-keywords  shadow">
                                     <input type="text" name="keywords" lay-verify="required" placeholder="输入关键词搜索" autocomplete="off" class="layui-input">
                                 </div>
                                 <div class="search-submit  shadow">
                                     <a class="search-btn" lay-submit="formSearch" lay-filter="formSearch"><i class="fa fa-search"></i></a>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="article-category shadow">
                        <div class="article-category-title" style="border: 1px solid black"><a href="/home/publicart" style="border: 0">发 表 文 章</a></div>
                    
                        <div class="clear"></div>
                    </div>
                     <div class="article-category shadow">
                         <div class="article-category-title">分类导航</div>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">ASP.NET MVC</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">SQL Server</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">Entity Framework</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">Web前端</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">C#基础</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">杂文随笔</a>
                         <div class="clear"></div>
                     </div>

                     <div class="blog-module shadow">
                         <div class="blog-module-title">作者推荐</div>
                         <ul class="fa-ul blog-module-ul">
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Web安全之跨站请求伪造CSRF</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">C#基础知识回顾-扩展方法</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC自定义错误页</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                         </ul>
                     </div>
                     <div class="blog-module shadow">
                         <div class="blog-module-title">随便看看</div>
                         <ul class="fa-ul blog-module-ul">
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">常用正则表达式</a></li>
                         </ul>
                     </div>
                     <!--右边悬浮 平板或手机设备显示-->
                     <div class="category-toggle"><i class="fa fa-chevron-left"></i></div>
                 </div>
                 <div class="clear"></div>
             </div>
         </div>
     </div>
     <!-- 底部 -->
     <footer class="blog-footer">
         <p><span>Copyright</span><span>&copy;</span><span>2017</span><a href="http://www.lyblogs.cn">不落阁</a><span>Design By LY</span></p>
         <p><a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备16029915号-1</a></p>
     </footer>
     <!--侧边导航-->
     <ul class="layui-nav layui-nav-tree layui-nav-side blog-nav-left layui-hide" lay-filter="nav">
        <li class="layui-nav-item ">
            <a href="{{url('/home/index')}}"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
        </li>
        <li class="layui-nav-item layui-this">
            <a href="{{url('/home/article')}}"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
        </li>
        <li class="layui-nav-item">
            <a href="{{url('/home/resource')}}"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
        </li>
        <li class="layui-nav-item">
            <a href="{{url('/home/timeline')}}"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;点点滴滴</a>
        </li>
        <li class="layui-nav-item">
            <a href="{{url('/home/about')}}"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
        </li>
     </ul>
     <!--分享窗体-->
     <div class="blog-share layui-hide">
         <div class="blog-share-body">
             <div style="width: 200px;height:100%;">
                 <div class="bdsharebuttonbox">
                     <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                     <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                     <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                     <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                 </div>
             </div>
         </div>
     </div>
     <!--遮罩-->
     <div class="blog-mask animated layui-hide"></div>
     <!-- layui.js -->
     <script src="/home/plug/layui/layui.js"></script>
     <!-- 全局脚本 -->
     <script src="/home/js/global.js"></script>
 </body>
 </html>