$(document).ready(function(){
    //报价时间
    $('#dt').val(function(){
        var dt = new Date();
        var myy = dt.getFullYear();
        var mym = dt.getMonth()+1;
        var myd = dt.getDate();
        var sep = '/';
        return myy+sep+mym+sep+myd;
    })
    //价格表费用即时计算
    //$('#valuation').append('<a>含税价格总计：0.00</a>');
    $('#valuation').val('含税价格总计：0.00');
    $('.item').focus(function(){
        if($(this).val()==0){
            $(this).val('');
        }
    })
    $('.item').blur(function(){
        if($(this).val()==''||$(this).val()==0){
            $(this).val(0);
        }
        var total = 0;
        $('.item').each(function(){
            if(!isNaN($(this).val())){
                total += parseInt($(this).val());
            }else{
                alert('isNaN');
            }
        })
        //var html = '<a>';
        html = '含税价格总计：';
        html += total.toFixed(2); //+ '</a>';
        //$('#valuation').empty();
        //$('#valuation').append(html);
        $('#valuation').val(html);
    })
    //报价内容默认加载
    $.post('quote.xml',function(data,status){
        $('#formatcontent').empty();
        var text = $(data).find('description').text();
        $(data).find('entry').each(function(){
            var $entry = $(this);
            text += $entry.find('title').text();
            text += $entry.find('content').text();
        })
        text += $(data).find('foot').text();
        $('#formatcontent').val(text);
    })
    //必填项提示
    $('li').find('input').each(function(){
        var $this = $(this);
        $this.blur(function(){
            if($this.val()!=''){
                $this.next('span').remove();
            }
            else{
                if(!$this.next().is('span')){
                    $this.after('<span>*（必填）</span>');
                }
            }
        })
    })
    //客户联系人即时显示
    $('#contact').blur(function(){
        var $value = $(this).val();
        if($value!=''){
            $('#contactcopy').text($value);
        }
        else{
            $('#contactcopy').text('XXX');
        }
    })
})
//表单验证，跳转提示
function confirm(){
    var reg1 = new RegExp('[\u4E00-\u9FA5]+');
    var reg2 = new RegExp('^([a-zA-Z\.\-\s])+\@(([a-zA-Z0-9\-])+\.)+[a-zA-Z]{2,4}$');
    var client = $('#client').val();
    var email = $('#email').val();
    var str1 = reg1.test(client);
    var str2 = reg2.test(email);
    if($('li').find('input').next().is('span')){
        alert('*（必填）内容为空！');
        return false;
    }else if(!str1){
        alert('客户公司全称必须为中文');
        return false;
    }else if(!str2){
        alert('报价人邮箱地址非法');
        return false;
    }
    else{
        alert('客户公司：'+$('#client').val()+'\n'+'客户联系人：'+$('#contact').val()+'\n'+'邮件抄送：'+$('#cc').val()+'\n'+'报价人：'+$('#sender').val()+'\n'+'报价人邮箱：'+$('#email').val()+'\n'+$('#valuation').val());
        return true;
    }
}