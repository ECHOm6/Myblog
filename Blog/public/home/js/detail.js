/*

@Name：不落阁整站模板源码 
@Author：Absolutely 
@Site：http://www.lyblogs.cn

*/

prettyPrint();
layui.use(['form', 'layedit'], function () {
    var form = layui.form();
    var $ = layui.jquery;
    var layedit = layui.layedit;

 

    //评论和留言的编辑器
    var editIndex = layedit.build('remarkEditor', {
        height: 150,
        tool: ['face', '|', 'left', 'center', 'right', '|', 'link'],
    });
    //评论和留言的编辑器的验证
    layui.form().verify({
        content: function (value) {
            value = $.trim(layedit.getText(editIndex));
            if (value == "") return "自少得有一个字吧";
            layedit.sync(editIndex);
        }
    });

        
        //监听提交
    
         //监听评论提交
    form.on('submit(sub)', function (data) {
        $.ajax({
            url:'/test/test3',
                    type:'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:data.field,
                    success:function (data){
                          layer.msg("评论成功", { icon: 1 });
                    }
        });
    })
});