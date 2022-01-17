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
     <title>文章发布！</title>
     <link rel="shortcut icon" href="../images/Logo_40.png" type="image/x-icon">
     <!--Layui-->
     <link href="/home/plug/layui/css/layui.css" rel="stylesheet" />
     <!--font-awesome-->
     <link href="/home/plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
     <!--全局样式表-->
     <link href="/home/css/global.css" rel="stylesheet" />
     <!-- 比较好用的代码着色插件 -->
     <link href="/home/css/prettify.css" rel="stylesheet" />
     <!-- 本页样式表 -->
     <link href="/home/css/detail.css" rel="stylesheet" />
     {{-- <link  href="{{url('/editor/themes/default/default.css')}}" rel="stylesheet"/>
      <link rel="stylesheet" href="/editor/plugins/code/prettify.css" />
      <script charset="utf-8" src="/editor/kindeditor-all-min.js"></script>
      <script charset="utf-8" src="/editor/lang/zh_CN.js"></script>
      <script charset="utf-8" src="/editor/plugins/code/prettify.js"></script> --}}
     
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
                 <a href="{{url('home/article')}}" title="文章专栏">文章专栏</a>
                 <a><cite>发表文章</cite></a>
             </blockquote>
             <div class="blog-main">
                 <div class="blog-main-left">

                    <form class="layui-form" method="POST" action="{{route('addart')}}">
                        <div class="layui-form-item">
                          <label class="layui-form-label">文章标题</label>
                          <div class="layui-input-block">
                            <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                          </div>
                        </div>
                       {{csrf_field()}}
                        <div class="layui-form-item">
                          <label class="layui-form-label">文章类别</label>
                          <div class="layui-input-block">
                            <select name="category" lay-verify="required">
                              <option value="运动">运动</option>
                              <option value="互联网">互联网</option>
                              <option value="金融">金融</option>
                              <option value="文学">文学</option>
                              <option value="教育">教育</option>
                              <option value="电子商务">电子商务</option>
                            </select>
                          </div>
                        </div>
                        {{-- <div class="layui-form-item">
                          <label class="layui-form-label">复选框</label>
                          <div class="layui-input-block">
                            <input type="checkbox" name="like[write]" title="写作">
                            <input type="checkbox" name="like[read]" title="阅读" checked>
                            <input type="checkbox" name="like[dai]" title="发呆">
                          </div>
                        </div> --}}
                       
                        <div class="layui-form-item layui-form-text">
                          <label class="layui-form-label">文本域</label>
                          <div class="layui-input-block">
                            <textarea id="editor_id" name="content" style="width:100%;height:560px" placeholder="请输入内容" class="layui-textarea"></textarea>
                          </div>
                        </div>
                        <div class="layui-form-item">
                          <div class="layui-input-block">
                            <input class="layui-btn" type="submit" lay-submit lay-filter="formDemo" value="立即提交">
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                          </div>
                        </div>
                      </form>
                 </div>
                 <div class="blog-main-right">
                     <!--右边悬浮 平板或手机设备显示-->
                     <div class="category-toggle"><i class="fa fa-chevron-left"></i></div><!--这个div位置不能改，否则需要添加一个div来代替它或者修改样式表-->
                     <div class="article-category shadow">
                         <div class="article-category-title">分类导航</div>
                         <!-- 点击分类后的页面和artile.html页面一样，只是数据是某一类别的 -->
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">ASP.NET MVC</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">SQL Server</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">Entity Framework</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">Web前端</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">C#基础</a>
                         <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">杂文随笔</a>
                         <div class="clear"></div>
                     </div>
                     <div class="blog-module shadow">
                         <div class="blog-module-title">相似文章</div>
                         <ul class="fa-ul blog-module-ul">
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                             <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
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
                         </ul>
                     </div>
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
     {{-- <script src="/layui/layui.all.js"></script> --}}
     <script src="/home/plug/layui/layui.js"></script>
     <!-- 自定义全局脚本 -->
     <script src="/home/js/global.js"></script>
     <!-- 比较好用的代码着色插件 -->
     <script src="/home/js/prettify.js"></script>
     <!-- 本页脚本 -->
     <script src="/home/js/detail.js"></script>
     {{-- 编辑器脚本 --}}


{{-- <script>
    KindEditor.ready(function(K) {
             var editor1 = K.create('textarea[name="content"]', {
                 cssPath : '/editor/plugins/code/prettify.css',
                 uploadJson : '/editor/php/upload_json.php',
                 fileManagerJson : '/editor/php/file_manager_json.php',
                 allowFileManager : true,
                 afterCreate : function() {
                     var self = this;
                     K.ctrl(document, 13, function() {
                         self.sync();
                         K('form[name=example]')[0].submit();
                     });
                     K.ctrl(self.edit.doc, 13, function() {
                         self.sync();
                         K('form[name=example]')[0].submit();
                     });
                 }
             });
             prettyPrint();
         });
         KindEditor.ready(function(K) {
                 var editor = K.editor({
                     allowFileManager : true
                 });
                 K('#image1').click(function() {
                     editor.loadPlugin('image', function() {
                         editor.plugin.imageDialog({
                             imageUrl : K('#url1').val(),
                             clickFn : function(url, title, width, height, border, align) {
                                 K('#url1').val(url);
                                 editor.hideDialog();
                             }
                         });
                     });
                 });  
             });
</script> --}}
 </body>
 </html>