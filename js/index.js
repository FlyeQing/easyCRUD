/**
 * @file index
 * @author FlyeQing
 */
$(function () {
    //鼠标滑过li;
    var list = $('#list');
    var li = list.children('li');
    $(li).hover(function () {
        $(this).addClass('cur').siblings().removeClass('cur');
    });
    //点击“新增一项”
    $('#btn').click(function () {
        var oLi = '<li><input type="text" class="input"><span class="ok" title="保存"></span><span class="cancel" title="取消"></span> </li>';
        list.append(oLi);
    });
    //点击“保存”,dialog判断成功\失败
    $(list).delegate('.ok', 'click', function () {
        var input = $(this).prev().val();
        if (input === "") {
            alert("类别名称不能为空");
            return false;
        }
        var ok = $(this);
        $.post('post.php', {action: 'add', title: input}, function (data) {
            if (data.success == 1) {
                var li = "<li rel='" + data.id + "'><span class='txt'>" + data.title + "</span><span class='edit' title='编辑'></span><span class='del' title='删除'></span> </li>";
                //  list.append(li);
                // ok.parent().remove();

                ok.parent().replaceWith(li);
                alert("恭喜，操作成功！")
            }
            else {
                alert("出错啦！")
            }
        }, "json")
    });

    //点击“取消”
    $(list).delegate('.cancel', 'click', function () {
        $(this).parent().remove();
    });

// 点击“删除”
    $(list).delegate('.del', 'click', function () {

        var id = $(this).parent().attr('rel');
        var info = "您确定要删除吗？";
        var btn = $(this);
        if (confirm(info)) {

            $.ajax({
                type: 'POST',
                url: 'post.php',
                data: {
                    id: id,
                    action: 'del'
                },
                success: function (msg) {
                    if (msg === '1') {
                        alert("删除成功！");
                        btn.parent().remove();
                    }
                    else {
                        alert("操作失败！");
                    }
                }

            })
        }
    });

//点击“编辑”,input可编辑
    $(list).delegate('.edit', 'click', function () {
            $(this).removeClass('edit').addClass('ok2').attr('title', '保存');
            $(this).next().removeClass('del').addClass('cancel2').attr('title', '取消');
            var str = $(this).prev().text();
            var input = "<input type='text' class='input' value='" + str + "'/>";
            $(this).prev().wrapInner(input);
        }
    );
    //input编辑处理
    $(list).delegate('.ok2', 'click', function () {
        var input2 = $(this).parent().find('input').val();
        var id = $(this).parent().attr('rel');
        if (input2 == '') {
            alert("请输入类别名称！");
            return false;
        }
        var ok2 = $(this);
        $.ajax({
            type: 'POST',
            url: 'post.php',
            data: "action=edit&title=" + input2 + "&id=" + id,
            success: function (msg) {
                if (msg == 1) {
                    alert("编辑成功！");
                    var str = "<span class='txt'>" + input2 + "</span><span class='edit' title='编辑'></span><span class='del' title='删除'></span>";
                    ok2.parent().html(str);
                }
                else {
                    alert("操作失败！");
                }
            }
        })
    });
    //取消编辑
    $(list).delegate('.cancel2', 'click', function () {
        var li = $(this).parent().html();
        var str1 = $(this).parent().find('input').val();
        var str = "<span class='txt'><span class='edit' title='编辑'></span><span class='del' title='删除'></span>" + str1 + "</span>";
        $(this).parent().html(str);
    });
});