<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.2</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/xadmin.css">
    <script type="text/javascript" src="/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="layui-fluid">
    <div class="layui-row">
        <form action="" method="post" class="layui-form layui-form-pane">
            <div class="layui-form-item">
                <label for="name" class="layui-form-label">
                    <span class="x-red">*</span>角色名
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="name" name="name" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">
                    拥有权限
                </label>
                <table  class="layui-table layui-input-block">
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" name="like1[write]" lay-skin="primary" lay-filter="father" title="用户管理">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                <input name="id[3]" lay-skin="primary" type="checkbox" title="用户停用" value="3">
                                <input name="id[4]" lay-skin="primary" type="checkbox" value="4" title="用户删除">
                                <input name="id[5]" lay-skin="primary" type="checkbox" value="5" title="用户修改">
                                <input name="id[6]" lay-skin="primary" type="checkbox" value="6" title="用户改密">
                                <input name="id[7]" lay-skin="primary" type="checkbox" value="7" title="用户列表">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <input lay-skin="primary" type="checkbox" value="2" title="文章管理" lay-filter="father">
                        </td>
                        <td>
                            <div class="layui-input-block">
                                <input name="id[8]" lay-skin="primary" type="checkbox" value="8" title="文章添加">
                                <input name="id[9]" lay-skin="primary" type="checkbox" value="9" title="文章删除">
                                <input name="id[10]" lay-skin="primary" type="checkbox" value="10" title="文章修改">

                                <input name="id[11]" lay-skin="primary" type="checkbox" value="11" title="文章列表">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="layui-form-item layui-form-text">
                <label for="desc" class="layui-form-label">
                    描述
                </label>

                <div class="layui-input-block">
                    <textarea placeholder="请输入内容" id="desc" name="des" class="layui-textarea"></textarea>
                </div>
            </div>
            <input type="hidden" name="class" value="role"  />

            <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" lay-filter="add">增加</button>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form','layer'], function(){
        $ = layui.jquery;
        var form = layui.form
            ,layer = layui.layer;

        //自定义验证规则
        form.verify({
            nikename: function(value){
                if(value.length < 5){
                    return '昵称至少得5个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return '两次密码不一致';
                }
            }
        });

        //监听提交
        form.on('submit(add)', function(data){
            console.log(data);
            //发异步，把数据提交给php
            $.ajax({
                type:'POST',
                url:'/admin/add',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:data.field,
                success:function (data){
                        layer.msg(data.message,{icon:6},function (){
                            //关闭当前frame
                            xadmin.close();

                            // 可以对父窗口进行刷新
                            xadmin.father_reload();
                        });
                    },
                error:function(data){

                }
            });

            return false;
        });


        form.on('checkbox(father)', function(data){

            if(data.elem.checked){
                $(data.elem).parent().siblings('td').find('input').prop("checked", true);
                form.render();
            }else{
                $(data.elem).parent().siblings('td').find('input').prop("checked", false);
                form.render();
            }
        });


    });
</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>

</html>
