
$(document).ready(function() {
    sendsns('#sendsns', 90);
    $('#Useryzm').keyup(function() {
        wapdxyzm();
    });

    $('#UserTel').focus(function() {
        if ($(this).val() == '�������ֻ�����') {
            $(this).val('');
            $(this).css('color', '#666');
        }
    })

    Switchcity();
    XFTwoChange();
    advancedOn();
    $("#HSearchTypeLi").val(4);
    HSearchType();

});

function sendsns(o, time) {
    var o = $(o);
    var set_time = time * 1000;
    function cookie() {
        var COOKIE_NAME = 'timer';
        var date = new Date();
        date.setTime(date.getTime() + set_time);
        $.cookie(COOKIE_NAME, date, {path: '/', expires: date});
    }

    function whatTime() {
        if (typeof $.cookie('timer') != "undefined") {
            var leftTime = Math.round(new Date($.cookie('timer')).getTime() / 1000 - new Date().getTime() / 1000);
            o.attr("disabled", true);
            Countdown(leftTime);
        }
    }
    whatTime();

    function Countdown(now) {
        var nowTime = now;
        var Timer = setInterval(
                function() {
                    --now;
                    o.html(now + '�����»�ȡ');
                    if (now <= 0) {
                        clearInterval(Timer);
                        o.html('��ȡ��֤��').attr("disabled", false);
                    }
                }, 1000);
    }

    o.click(function() {
        var tel = $('#UserTel').val();
        if (tel != '' && tel != '�������ֻ�����' && checkMobile(tel)) {
            $.post('/sms/wapdxin', {tel: tel}, function(msg) {
            });
            o.html(time + '�����»�ȡ').attr("disabled", true);
            Countdown(time);
            cookie();
        } else {
            var s = '�������ֻ�����';
            $('#UserTel').css('color', 'red');
            $('#UserTel').val('�������ֻ�����');
        }
    });

}

function wapdxyzm() {
    var checksms = $('#Useryzm').val();
    var tel = $('#UserTel').val();

    var num = /[^\d]/g;
    if (!num.test(checksms)) {
        if (checksms.length > 5 && checksms.length < 7) {
            $.post('/sms/wapdxyzm', {checksms: checksms, tel: tel}, function(msg) {
                if (msg['d'] == 1) {
                    $('#UserYZMTS').text('������6λ������֤��');
                    telyzm = false;
                } else {
                    $('#UserYZMTS').text('');
                    checksms;
                    telyzm = true;

                }
            });
        } else {
            $('#UserYZMTS').text('������6λ������֤��');
            telyzm = false;
        }
    } else {
        $('#UserYZMTS').text('����������');
        telyzm = false;
    }
}

function advancedOn() {
    var advancedon = $('#advanced_on').attr('value');
    if (advancedon == '1') {
        MoreSearchCK();
    }
}
function mHSearchXLck(obj) {
    var obj = $(obj);
    var xl3icon = obj.parent('.moreSearchTC_Con_li').children('.xl3icon');
    var xlcon = obj.parent('.moreSearchTC_Con_li').children('.mHSearch_select_ul');
    var k = obj.attr('k');
    if (k == 'yes') {
        xlcon.slideDown();
        xl3icon.addClass('xl3icon180');
        obj.attr('k', 'no');
    } else if (k == 'no') {
        xlcon.slideUp();
        xl3icon.removeClass('xl3icon180');
        obj.attr('k', 'yes');
    }
}
function HSearchMoneyHomeBlu(obj) {
    var obj = $(obj);
    var val = $.trim(obj.val());
    if (isNaN(val)) {
        obj.parents('.Search_Money').css('border', '1px solid #f00c0c');
    } else if (val.length == 0) {
        obj.parents('.Search_Money').css('border', '1px solid #f00c0c');
    } else if (val < 0 || val >= 6000) {
        alert('��������0-6000��֮��');
        obj.parents('.Search_Money').css('border', '1px solid #f00c0c');
    }
}
function HSearchMoneyHomeFoc(obj) {
    var obj = $(obj);
    obj.parents('.Search_Money').css('border', '1px solid #c6c6c6');
}
function HSearchMoneyBlu(obj) {
    var obj = $(obj);
    var val = $.trim(obj.val());
    if (isNaN(val)) {
        obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #f00c0c');
    } else if (val.length == 0) {
        obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #f00c0c');
    } else if (val < 0 || val >= 6000) {
        alert('��������0-6000��֮��');
        obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #f00c0c');
    }
}
function HSearchMoneyFoc(obj) {
    var obj = $(obj);
    obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #c6c6c6');
}
function HSearchMonthBlu(obj) {
    var obj = $(obj);
    var val = $.trim(obj.val());
    if (isNaN(val)) {
        obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #f00c0c');
    } else if (val.length == 0) {
        obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #f00c0c');
    } else if (val < 0 || val >= 360) {
        alert('����������0-360����֮��');
        obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #f00c0c');
    }
}
function HSearchMonthFoc(obj) {
    var obj = $(obj);
    obj.parent('.moreSearchTC_Con_ipt').css('border', '1px solid #c6c6c6');
}
function mHSearchLick(obj) {
    var obj = $(obj);
    var showTit = obj.parents('.moreSearchTC_Con_li').children('span.mHSearch_select_show');
    var xl3icon = obj.parents('.moreSearchTC_Con_li').children('span.xl3icon');
    var xlcon = obj.parent('.mHSearch_select_ul');
    var Li = obj.parent().children('li');
    var Otext = obj.text();
    var Ovalue = obj.attr('value');
    showTit.text(Otext);
    showTit.attr('value', Ovalue);
    showTit.css('color', '#444555');
    Li.removeClass('mo');
    obj.addClass('mo');
    xlcon.slideUp();
    xl3icon.removeClass('xl3icon180');
    showTit.attr('k', 'yes');
}
function HSearchType(obj) {
    var selectTypeObj = $('select[id=HSearchTypeLi] option:selected');
    var selectTypeName = selectTypeObj.text();
    var selectMoney = selectTypeObj.attr('money');
    $('#HSearchType').text(selectTypeObj.text());
    $('#HSearchMoney').text(selectMoney);
    $("select[id=HSearchMoneyLi]").val(selectMoney);
    $('.Search_type input[name=route]').attr('value', selectTypeObj.attr('route'));
    $('.Search_type input[name=month]').attr('value', selectTypeObj.attr('month'));
    $('.Search_type input[name=shoufu]').attr('value', selectTypeObj.attr('shoufu'));
    var obj = $(obj);
    var val = obj.val();
    if (val == 1) {
        $('#HSearchMoney').val(50);
        var xlhtml = $('#qy_HSearchMoneyUL').html();
        $('#HSearchMoneyUL').html(xlhtml);
    } else if (val == 2) {
        $('#HSearchMoney').val(15);
        var xlhtml = $('#gc_HSearchMoneyUL').html();
        $('#HSearchMoneyUL').html(xlhtml);
    } else if (val == 3) {
        $('#HSearchMoney').val(100);
        var xlhtml = $('#gf_HSearchMoneyUL').html();
        $('#HSearchMoneyUL').html(xlhtml);
    } else if (val == 4) {
        $('#HSearchMoney').val(10);
        var xlhtml = $('#xf_HSearchMoneyUL').html();
        $('#HSearchMoneyUL').html(xlhtml);
    }
}
function HSearchMoneyXL() {
    $('#HSearchMoneyUL').toggle();
}
function HSearchMoneyKup() {
    $('#HSearchMoneyUL').hide();
}
function MoSearchMoneyKup(obj) {
    var obj = $(obj);
    var ul = obj.parent().children('ul.Search_Money_ul');
    ul.hide();
}
function HSearchMoneyList(obj) {
    var obj = $(obj);
    var val = obj.attr('value');
    $('#HSearchMoney').val(val);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function HSearchMoney() {
    var selectMoneyObj = $('select[id=HSearchMoneyLi] option:selected');
    var selectMoney = selectMoneyObj.val();
    $('#HSearchMoney').text(selectMoney);
}
function Switchcity() {
    SwitchcityEachFn('hot_list');
    SwitchcityEachFn('letters_list');
}
var SwitchcityEachFn = function(className) {
    var $divObj = $("." + className);
    for (var j = 0; j < $divObj.length; j++) {
        var $liObj = $($divObj[j]).children().children();
        var len = $liObj.length;
        for (var i = 0; i < len; i++) {
            $($liObj[i]).click(function(obj) {
                $('#swit_ticy').html($(this).html());
            })
        }
    }
}
function ProviewTab(obj) {
    var obj = $(obj);
    var td = $('#Proview_tab_tit td');
    td.removeClass('show_td');
    obj.addClass('show_td');
    var num = obj.index();
    var con = $('#Proview_tab_con .Proview_tab_c1');
    var objcon = con.eq(num);
    con.hide();
    objcon.show();
}
function figureFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '������ÿ�¹��ʣ���5000') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function figureBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('������ÿ�¹��ʣ���5000');
        obj.css('color', '#999');
    } else {
        $('#UsermoneyTS').text('');
        $('#UsermoneyTS').hide();
    }
}
function BirthfigureFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '�����������ݣ���1986') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
    $('#year_born_inpTS').text('');
    $('#year_born_inpTS').hide();
}
function BirthfigureBlu(obj) {
    var obj = $(obj);
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('�����������ݣ���1986');
        obj.css('color', '#999');
    }
}
function yearFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '����,1992') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function yearBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('����,1992');
        obj.css('color', '#999');
    }
}
function BirthYearCk(obj) {
    var obj = $(obj);
    var k = $('#BirthYearSelect').attr('k');
    if (k == 'no') {
        $('#BirthYearSelect').slideDown();
        $('#BirthYearSelect').attr('k', 'ye');
    } else {
        $('#BirthYearSelect').slideUp();
        $('#BirthYearSelect').attr('k', 'no');
    }
}
function yearliSelect(obj) {
    var obj = $(obj);
    $('#BirthYearSelect p a').removeClass('yearOK');
    obj.addClass('yearOK');
    obj_reval = obj.attr('yearval');
    $('#year_born_inp').attr('val', obj_reval);
    $('#year_born_inp').html(obj_reval);
    $('#BirthYearSelect').slideUp();
    $('#BirthYearSelect').attr('k', 'no');
    $('#year_born_inpTS').text('');
    $('#year_born_inpTS').hide();
}
function qianFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '�磺1��Ԫ������10000') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function qianBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('�磺1��Ԫ������10000');
        obj.css('color', '#999');
        $('#monthlyTS').show();
        $('#monthlyTS').text('��Ҫ������');
    } else {
        if (isNaN(val)) {
            $('#monthlyTS').show();
            $('#monthlyTS').text('Ҫ������Ŷ');
        } else {
            $('#monthlyTS').hide();
            $('#monthlyTS').text('');
        }
    }
}
function applyTwoYZ() {

    var nickname = $.trim($('#UserName').val());
    var nknet = $('#UserNameTS');
    if (nickname == $('#nickname').attr('myplace')) {
        nickname = '';
    }
    var testNum = /([1-9]\d*\.?\d*)|(0\.\d*[1-9])/;
    var testnicknameNum = testNum.test(nickname);
    if (/[\s><,._\��\[\]\{\}\?\/\+\=\|\'\\\":;\~\!\@\#\*\$\%\^\&`\uff00-\uffff)(]+/.test(nickname) && nickname.length > 0 || testnicknameNum) {
        nknet.show();
        nknet.text('����ֻ����Ӣ��');
        UserName = false;
    } else if (nickname == '') {
        nknet.show();
        UserName = false;
    } else if (nickname.length == 0) {
        nknet.show();
        nknet.text('����д���ĳƺ�');
        UserName = false;
    } else {
        nknet.text('');
        UserName = true;
    }



    var Telval = $.trim($('#UserTel').val());
    if (Telval == '���ڽ����Ŵ�Ա��ϵ��ʽ') {
        Tel = false;
        $('#UserTelTS').text('�������ֻ�����');
    } else {
        if (checkMobile(Telval)) {
            Tel = true;
        } else {
            Tel = false;
            $('#UserTelTS').text('�ֻ��Ÿ�ʽ����Ŷ');
        }
    }

    var yzm = $.trim($('#Useryzm').val());
    if (yzm == '�����������֤��') {
        $('#UserYZMTS').text('�����������֤��');
    } else {
        var num = /[^\d]/g;
        if (!num.test(yzm)) {
            Yzm = true;
        } else {
            Yzm = false;
            $('#UserYZMTS').text('�������ֲ���Ŷ');
        }
    }

    var Emailval = $.trim($('#UserEmail').val());
    if (Emailval == '���ڻ�ȡ��������������(��ѡ��)' || Emailval == '') {
        Email = true;
    } else {
        if (checkEmail(Emailval)) {
            Email = true;
        } else {
            Email = false;
            $('#UserEmailTS').text('�ʼ���ʽ����Ŷ');
        }
    }
    var moneyval = $.trim($('#Usermoney').val());
    if (moneyval == '����������') {
        $('#UsermoneyTS').text('����������');
    } else {
        if (checkMoney(moneyval)) {
            Money = true;
        } else {
            Money = false;
            $('#UsermoneyTS').text('�������ֲ���Ŷ');
        }
    }
}
function applyThreeYZ() {
    var val = $.trim($('#applyArea').val());
    var num = val.length;
    var count = 140;
    if (num > count) {
        var yewnum = $('#applyArea').val().substr(0, count)
        $('#applyAreaTS').text('������140��Ŷ');
        applyArea = false;
    } else if (num < 5) {
        $('#applyAreaTS').text('��������֣��������ͣ�');
        applyArea = false;
    } else {
        applyArea = true;
    }
}
function applyFastYZ() {
    var nickname = $.trim($('#UserName').val());
    var nknet = $('#UserNameTS');
    if (nickname == $('#nickname').attr('myplace')) {
        nickname = '';
    }
    var testNum = /([1-9]\d*\.?\d*)|(0\.\d*[1-9])/;
    var testnicknameNum = testNum.test(nickname);
    if (/[\s><,._\��\[\]\{\}\?\/\+\=\|\'\\\":;\~\!\@\#\*\$\%\^\&`\uff00-\uffff)(]+/.test(nickname) && nickname.length > 0 || testnicknameNum) {
        nknet.show();
        nknet.text('����ֻ����Ӣ��');
        UserName = false;
    } else if (nickname == '') {
        nknet.show();
        UserName = false;
    } else if (nickname.length == 0) {
        nknet.show();
        nknet.text('����д���ĳƺ�');
        UserName = false;
    } else {
        nknet.text('');
        UserName = true;
    }

    var Telval = $.trim($('#UserTel').val());
    if (Telval == '���ڽ����Ŵ�Ա��ϵ��ʽ') {
        Tel = false;
        $('#UserTelTS').text('�������ֻ�����');
    } else {
        if (checkMobile(Telval)) {
            Tel = true;
        } else {
            Tel = false;
            $('#UserTelTS').text('�ֻ��Ÿ�ʽ����Ŷ');

        }
    }
    var yzm = $.trim($('#Useryzm').val());
    if (yzm == '�����������֤��') {
        $('#UserYZMTS').text('�����������֤��');
    } else {
        var num = /[^\d]/g;
        if (!num.test(yzm)) {
            Yzm = true;
        } else {
            Yzm = false;
            $('#UserYZMTS').text('�������ֲ���Ŷ');
        }
    }

    var moneyval = $.trim($('#Usermoney').val());
    if (moneyval == '����������') {
        $('#UsermoneyTS').text('����������');
    } else {
        if (checkMoney(moneyval)) {
            Money = true;
        } else {
            Money = false;
            $('#UsermoneyTS').text('�������ֲ���Ŷ');
        }
    }
}

function usernameFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());

    if (val == '�磺������') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function usernameBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('�磺������');
        obj.css('color', '#999');
    }
}
function telFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '���ڽ����Ŵ�Ա��ϵ��ʽ') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function telBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('���ڽ����Ŵ�Ա��ϵ��ʽ');
        obj.css('color', '#999');
    }
}
function emailFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '���ڻ�ȡ��������������(��ѡ��)') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function emailBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('���ڻ�ȡ��������������(��ѡ��)');
        obj.css('color', '#999');
    }
}
function moneyFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '����������') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function moneyBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('����������');
        obj.css('color', '#999');
    }
}
function YourFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '�����ֻ���') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function YourBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('�����ֻ���');
        obj.css('color', '#999');
    }
}
function checkMobile(s) {
    var regu = /^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/;
    var re = new RegExp(regu);
    if (re.test(s)) {
        return true;
    }
    else {
        return false;
    }
}
function checkEmail(yx) {
    var reyx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9_\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return(reyx.test(yx));
}
function checkMoney(money) {
    if (!isNaN(money) && money != '' && money != '����������') {
        return true;
    } else {
        return false;
    }
}
function hideTS(obj) {
    $('.ApplyOne_li_ts').text('');
}
function ApplyCK(nextName) {
    if (nextName == 'Applyone') {
        applyOneYZ();
        if (CompanyType == true && dgdsMoney == true && BusinessTime == true && ApplyOne_yon == true) {
            window.open('ApplyTwo.html');
        }
    } else if (nextName == 'Applytwo') {
        applyTwoYZ();
        var num = $('#num').val();
        if (num == 1) {             //=1���Źز���Ҫ��֤����
            if (UserName == true && Tel == true && Email == true && Yzm == true) {
                $('form').submit();
            }
        } else {
            wapdxyzm();
            if (UserName == true && Tel == true && Email == true && Yzm == true && telyzm == true) {
                $('form').submit();
            }
        }

    } else if (nextName == 'ApplyThree') {
        var val = $.trim($('#applyArea').val());
        var num = val.length;
        if (num > 0) {
            applyThreeYZ();
            if (applyArea == true) {
                $('form').submit();
            }
        } else {
            $('form').submit();
        }
    } else if (nextName == 'FastApply') {
        applyFastYZ();
        var num = $('#num').val();    //=1���Ź�
        if (num == 1) {
            if (UserName == true && Tel == true && Money == true && Yzm == true) {
                $("form").submit();
            }

        } else {
            wapdxyzm();
            if (UserName == true && Tel == true && Money == true && Yzm == true && telyzm == true) {
                $("form").submit();
            }
        }
    }
}
function ApplyOne_yonCK(obj) {
    var obj = $(obj);
    var span = $('.changeOp span');
    var objspan = obj.find('span');
    span.removeClass('changeYes');
    objspan.addClass('changeYes');
    $('#ApplyOne_yonTS').text('');
}
function ApplyOne_typeCK(obj) {
    var obj = $(obj);
    var span = $('.changeOp01 span');
    var objspan = obj.find('span');
    span.removeClass('changeYes');
    objspan.addClass('changeYes');
    $('#ApplyOne_yonTS').text('');
}
function Apply_RadioGroupsCK(obj) {
    myCheck(obj);
    var obj = $(obj);
    var yk = obj.attr('yk');
    if (yk == 'a') {
        $('#ykdiv').text('�򿨹���:');
    } else {
        $('#ykdiv').text('��ȡ�ֽ�:');
    }
    var alldiv = obj.parents('.ApplyZKCon').children('.ApplyOne_yon');
    alldiv.hide();
    obj.show();
    alldiv.removeClass('OkApplyOne_yon');
    obj.addClass('OkApplyOne_yon');
    var titdiv = obj.parents('.ApplyZKCon').prev('.posi').find('.pulldown');
    titdiv.removeClass('pulldownOpen');
    obj.parents('.ApplyZKCon').prev('.posi').removeClass('redTS');
}
function myCheck(obj) {
    var obj = $(obj);
    var span = obj.parent('.ApplyZKCon').find('.changeOp01').children('span');
    var objspan = obj.find('span');
    span.removeClass('changeYes');
    objspan.addClass('changeYes');
}
function ApplyOne_fragrantCK(obj) {
    var obj = $(obj);
    var span = $('.changeOp01 span');
    var objspan = obj.find('span');
    span.removeClass('changeYes');
    objspan.addClass('changeYes');
    $('#ApplyOne_yonTS').text('');
}
function niankey() {
    var hotkey = document.getElementById('nianSelect').value;
    $('#work_year').text(hotkey);
    $('#work_year').attr('val', hotkey);
    $('#YearMonthTS').text('');
    $('#YearMonthTS').hide();
}
function yuekey() {
    var hotkey = document.getElementById('yueSelect').value;
    $('#work_month').text(hotkey);
    $('#work_month').attr('val', hotkey);
    $('#YearMonthTS').text('');
    $('#YearMonthTS').hide();
}
function BusinessTimeCK() {
    $('#BusinessTimeTS').hide();
    $('#BusinessTimeTS').text('');
    $('#BusinessTime').css('color', '#333');
    var hotkeyArr = new Array('', '�������', '����', '1��', '2��', '3��', '4��', '5�����ϣ���5�꣩');
    var hotkey = document.getElementById('BusinessTimeSelect').value;
    var text = hotkeyArr[hotkey];
    document.getElementById('BusinessTime').innerHTML = text;
    $('#BusinessTime').attr('value', hotkey);
}
function SearchTypeLiCK(obj) {
    var obj = $(obj);
    var reval = obj.attr('reval');
    if (reval == 4) {
        $('.moreSearchTC_Nav li').removeClass('show');
        obj.addClass('show');
        $('.moreSearchTC_Con').hide();
        $('#ShopSearchCon').show();
    } else if (reval == 1) {
        $('.moreSearchTC_Nav li').removeClass('show');
        obj.addClass('show');
        $('.moreSearchTC_Con').hide();
        $('#CompanySearchCon').show();
    } else if (reval == 2) {
        $('.moreSearchTC_Nav li').removeClass('show');
        obj.addClass('show');
        $('.moreSearchTC_Con').hide();
        $('#CarSearchCon').show();
    } else if (reval == 3) {
        $('.moreSearchTC_Nav li').removeClass('show');
        obj.addClass('show');
        $('.moreSearchTC_Con').hide();
        $('#HouseSearchCon').show();
    }
}
function MoreSearchCK() {
    var Msearch = $('#moreSearchTC');
    $('#SearchTCZZC').show();
    Msearch.show();
}
function MoreSearchBack() {
    $('#moreSearchTC').hide();
    $('#SearchTCZZC').hide();
}
function ApplyZK(obj) {
    var obj = $(obj);
    var yesPulldownOpen = obj.find('.pulldown').hasClass('pulldownOpen');
    var ApplyZKCon = obj.next('.ApplyZKCon');
    var ApplyZKCon_li = ApplyZKCon.children('.ApplyOne_yon');
    var changeYes = ApplyZKCon.find('.changeOp01').children('span');
    var haschangeYes = changeYes.hasClass('changeYes');
    var yesDiv = ApplyZKCon.children('.OkApplyOne_yon');
    if (yesPulldownOpen == false) {
        ApplyZKCon_li.show();
        obj.find('.pulldown').addClass('pulldownOpen');
    } else {
        obj.find('.pulldown').removeClass('pulldownOpen');
        if (haschangeYes == true) {
            ApplyZKCon_li.hide();
            yesDiv.show();
            obj.find('.pulldown').removeClass('pulldownOpen');
        } else {
            ApplyZKCon_li.hide();
        }
    }
}
function  XFTwoChange() {
    var spanLi = $('.ChangeCK span');
    spanLi.click(function() {
        $(this).parent().children('.whet_yes01').addClass('whet_yesCe');
        $(this).parent().children('.whet_no01').addClass('whet_noCe');
        $(this).parent().children('span').removeClass('whet_yes01');
        $(this).parent().children('span').removeClass('whet_no01');
        $(this).parent().children('span').removeClass('whet_OK');
        $(this).addClass('whet_OK');
        var parentID = $(this).parents('.daikj').attr('id');
        if (parentID == 'hasCreditCard') {
            $('#has_blue_card_tip div.whether_right p').text('');
            $('#has_blue_card_tip').hide();
        } else if (parentID == 'hasDebt_Card') {
            $('#has_debt_card_tip div.whether_right p').text('');
            $('#has_debt_card_tip').hide();
        } else if (parentID == 'hasOkApply') {
            $('#has_succ_reply_tip div.whether_right p').text('');
            $('#has_succ_reply_tip').hide();
        } else if (parentID == 'hasDebt_Daik') {
            $('#has_debt_loan_tip div.whether_right p').text('');
            $('#has_debt_loan_tip').hide();
        }
        var ok = $(this).attr('ok');
        var ThisParent = $(this).parents('.daikjPDLR');
        var lastTsText = ThisParent.children('div.daikj_ts:last').find('p').text();
        if (ok == 'yes') {
            ThisParent.children('.daikj_02').show();
            ThisParent.children('.daikj_ts').show();
            if (lastTsText == '') {
                ThisParent.children('div.daikj_ts:last').hide();
            }
        } else {
            ThisParent.children('.daikj_02').hide();
            ThisParent.children('.daikj_ts').hide();
        }
    });
}
function ConditionsTCCK(obj) {
    var obj = $(obj);
    var k = obj.attr('k');
    if (k == 'ye') {
        var allTCul = $('.PageConditions').find('.Conditions_TC');
        allTCul.slideUp();
        var allShowTit = $('.PageConditions').find('.Conditions_li_pd');
        allShowTit.attr('k', 'ye');
        allShowTit.css('background', '#fff');
        var allXz180 = $('.PageConditions').find('.Conditions_xl');
        allXz180.removeClass('Conditions_xl180');
    }
    var xz180 = obj.parent().children('span.Conditions_xl');
    var Conditions_TC = obj.parent().children('ul.Conditions_TC');
    if (k == 'ye') {
        xz180.addClass('Conditions_xl180');
        obj.css('background', '#eee');
        Conditions_TC.slideDown();
        obj.attr('k', 'no');
    } else {
        xz180.removeClass('Conditions_xl180');
        obj.css('background', '#fff');
        Conditions_TC.slideUp();
        obj.attr('k', 'ye');
    }
}
function ConditionsLiCK(obj) {
    var xindai_type;
    var url;
    xindai_type = $('#xindai_type').attr('value');
    url = $('#url').attr('value');
    var obj = $(obj);
    var reval = obj.attr('reval');
    var text = obj.text();
    var showcon = obj.parent().parent().children('.Conditions_li_pd');
    var xz180 = obj.parent().parent().children('span.Conditions_xl');
    var allli = obj.parent().children('li');
    obj.parents('.Conditions_li').find('span.Conditions_word').attr('reval', reval);
    obj.parents('.Conditions_li').find('span.Conditions_word').text(text);
    obj.parent('.Conditions_TC').slideUp();
    showcon.css('background', '#fff');
    xz180.removeClass('Conditions_xl180');
    allli.removeClass('mo');
    obj.addClass('mo');
    obj.parents('.Conditions_li').children('.Conditions_li_pd').attr('k', 'ye');
    switch (xindai_type) {
        case 'xiaofei':
            var xf_JobType = $('#xf_JobType').attr('reval');
            var xf_CreditType = $('#xf_CreditType').attr('reval');
            var xf_houseType = $('#xf_houseType').attr('reval');
            url = url + '&profession=' + xf_JobType + '&credit_record=' + xf_CreditType + '&has_house=' + xf_houseType;
            break;
        case 'qiye':
            var qy_JobType = $('#qy_JobType').attr('reval');
            var qy_CreditType = $('#qy_CreditType').attr('reval');
            var qy_houseType = $('#qy_houseType').attr('reval');
            url = url + '&profession=' + qy_JobType + '&credit_record=' + qy_CreditType + '&has_house=' + qy_houseType;
            break;
        case 'goufang':
            var gf_changquanType = $('#gf_changquanType').attr('reval');
            var gf_shopHouse = $('#gf_shopHouse').attr('reval');
            var gf_homeType = $('#gf_homeType').attr('reval');
            url = url + '&house_type=' + gf_changquanType + '&first_suite=' + gf_shopHouse + '&secondhand_house=' + gf_homeType;
            break;
        case 'gouche':
            var gc_houseType = $('#gc_houseType').attr('reval');
            var gc_carNumber = $('#gc_carNumber').attr('reval');
            var gc_carUse = $('#gc_carUse').attr('reval');
            var gc_carType = $('#gc_carType').attr('reval');
            url = url + '&has_house=' + gc_houseType + '&car_number=' + gc_carNumber + '&car_use=' + gc_carUse + '&car_type=' + gc_carType;
            break;
    }
    window.location.href = url;
}
function SortingLink(obj) {
    var obj = $(obj);
    var k = obj.attr('k');
    if (k == 'ye') {
        $('#SortingPX').css('background', '#4fa9ee');
        $('#SortingLinkTC').slideDown();
        obj.attr('k', 'no');
    } else {
        $('#SortingPX').css('background', '#e9e9e9');
        $('#SortingLinkTC').slideUp();
        obj.attr('k', 'ye');
    }
}
function SortingLinkLi(obj) {
    var obj = $(obj);
    var reval = obj.attr('reval');
    var text = obj.text();
    var c = obj.attr('c');
    $('#SortingShow').attr('reval', reval);
    $('#SortingShow').text(text);
    $('#SortingShow').attr('k', 'ye');
    $('#SortingLinkTC li').removeClass('mo');
    obj.parent().addClass('mo')
    $('#SortingPX').css('background', '#e9e9e9');
    $('#SortingLinkTC').slideUp();
    url = $('#order_url').attr('value');
    window.location.href = url + c;
}
function applyNext(next_name) {
    if (next_name == 'xiaofei_two') {
        var bool = xiaofei_appyOneYZ();
        if (bool == true) {
            $('form[name=apply]').submit();
        }
    } else if (next_name == 'qiye_two') {
        var bool = qiye_appyOneYZ();
        if (bool == true) {
            $('form[name=apply]').submit();
        }
    } else if (next_name == 'gouche_two') {
        var bool = gouche_appyOneYZ();
        if (bool == true) {
            $('form[name=apply]').submit();
        }
    } else if (next_name == 'goufang_two') {
        var bool = goufang_appyOneYZ();
        if (bool == true) {
            $('form[name=apply]').submit();
        }
    }
}
function xiaofei_appyOneYZ() {
    var bool = true;
    var xf_companyTypeYs = $('#xf_companyType').find('div.changeOp01').children('span').hasClass('changeYes');//----------- ��˾���� -----------
    if (xf_companyTypeYs == false) {
        bool = false;
        $('#xf_companyType').prev('.posi').addClass('redTS');
    } else {
        $('input[name=company_type]').val($('#xf_companyType .changeYes').attr('value'))
    }
    var xf_incomeTypeYs = $('#xf_incomeType').find('div.changeOp01').children('span').hasClass('changeYes');//----------- ���ʷ�����ʽ -----------
    if (xf_incomeTypeYs == false) {
        bool = false;
        $('#xf_incomeType').prev('.posi').addClass('redTS');
    } else {
        $('input[name=salary_type]').val($('#xf_incomeType .changeYes').attr('value'));
    }
    var Usermoney = $.trim($('#Usermoney').val());//----------- �򿨹��� -----------
    if (Usermoney == '������ÿ�¹��ʣ���5000' || Usermoney.length == 0) {
        bool = false;
        $('#UsermoneyTS').show();
        $('#UsermoneyTS').text('�����������Ŷ');
    }
    if (isNaN(Usermoney)) {
        bool = false;
        $('#UsermoneyTS').show();
        $('#UsermoneyTS').text('�ף�Ҫ�������');
    } else {
        $('input[name=salary]').val(Usermoney);
    }

    var BirthYear2 = $('#BirthYear').val();//----------- ������� 02-----------
    var BirthYear_01 = BirthYear2.substr(0, 1);
    var BirthYear_02 = BirthYear2.substr(1, 1);
    var BirthYear_03 = BirthYear2.substr(2, 1);
    var BirthYear_04 = BirthYear2.substr(3, 1);
    $('input[name=year_born]').val(BirthYear2);
    if (!isNaN(BirthYear2)) {
        if (BirthYear_01 != 1 && BirthYear_01 != 2) {
            bool = false;
            $('#year_born_inpTS').show();
            $('#year_born_inpTS').text('���ڹ涨��ǧ���꣬��Ҫ��Խ��');
        }
        if (BirthYear_01 == 1) {
            if (BirthYear_02 != 9) {
                bool = false;
                $('#year_born_inpTS').show();
                $('#year_born_inpTS').text('���ڹ涨�����ͣ���Ҫ��Խ��');
            }
        } else if (BirthYear_01 == 2) {
            if (BirthYear_02 != 0) {
                bool = false;
                $('#year_born_inpTS').show();
                $('#year_born_inpTS').text('���ڹ涨�����ͣ���Ҫ��Խ��');
            }
        }
        if (BirthYear_01 == 2 && BirthYear_02 == 0) {
            if (BirthYear_03 != 0 && BirthYear_03 != 1) {
                bool = false;
                $('#year_born_inpTS').show();
                $('#year_born_inpTS').text('���ڹ涨������Ҫ��Խ��');
            } else if (BirthYear_03 == 1) {
                if (BirthYear_04 > 4) {
                    bool = false;
                    $('#year_born_inpTS').show();
                    $('#year_born_inpTS').text('��2014��������Ҫ��Խ����');
                }
            }
        }
        if (BirthYear2 < 1959) {
            bool = false;
            $('#year_born_inpTS').show();
            $('#year_born_inpTS').text('�ܱ�Ǹ�����������ѳ����������');
            if (BirthYear2 < 1900) {
                $('#year_born_inpTS').show();
                $('#year_born_inpTS').text('���ڹ涨�����ͣ���Ҫ��Խ��');
            }
        } else if (BirthYear2 == 2014) {
            bool = false;
            $('#year_born_inpTS').show();
            $('#year_born_inpTS').text('��ӭ�����˼䣬ף�㽡���ɳ�');
        } else if (BirthYear2 > 2014) {
            bool = false;
            $('#year_born_inpTS').show();
            $('#year_born_inpTS').text('���2014��������Ҫ��Խ����');
        }
    } else {
        $('#year_born_inpTS').show();
        $('#year_born_inpTS').text('���ֻ��������Ŷ');
    }

    var jobyear = $('#work_year').attr('val'); //----------- ����ʱ�� -- �� -----------
    var jobmonth = $('#work_month').attr('val');//----------- ����ʱ�� -- �� -----------
    if (jobyear == '' || jobmonth == '') {
        bool = false;
        $('#YearMonthTS').show();
        $('#YearMonthTS').text('����ʱ�䣬������');
    } else if (jobyear == 0 && jobmonth == 0) {
        bool = false;
        $('#YearMonthTS').show();
        $('#YearMonthTS').text('�������²��ܶ�Ϊ0');
    } else {
        $('input[name=job_year]').val(jobyear);
        $('input[name=job_month]').val(jobmonth);
    }
    var hasCreditCard = $('#hasCreditCard div.ChangeCK span').hasClass('whet_OK');//----------- ���Ƿ������ÿ� -----------
    if (hasCreditCard == true) {
        $('#has_blue_card_tip .whether_right p').text('');
        var whet_OK = $('#hasCreditCard div.ChangeCK span.whet_OK');
        var ok = whet_OK.attr('ok');
        if (ok == 'yes') {
            var MuchCard = $.trim($('#count_creditcard').val());
            var MoneyCard = $.trim($('#number_creditcard').val());
            if (MuchCard.length == 0) {
                bool = false;
                $('#count_blue_card_tip').show();
                $('#count_blue_card_tip .whether_right p').text('��ҪΪ��');
            }
            if (MoneyCard.length == 0) {
                bool = false;
                $('#money_blue_card_tip').show();
                $('#money_blue_card_tip .whether_right p').text('��ҪΪ��');
            }
            if (isNaN(MuchCard)) {
                bool = false;
                $('#count_blue_card_tip').show();
                $('#count_blue_card_tip .whether_right p').text('�ף�Ҫ�������');
            } else if (isNaN(MoneyCard)) {
                bool = false;
                $('#money_blue_card_tip').show();
                $('#money_blue_card_tip .whether_right p').text('�ף�Ҫ�������');
            }
            $('input[name=has_creditcard]').val('��');
        } else {
            $('input[name=has_creditcard]').val('û��');
        }
        $('input[name=creditcard_num]').val(MuchCard);
        $('input[name=creditcard_money]').val(MoneyCard);
    } else {
        bool = false;
        $('#has_blue_card_tip').show();
        $('#has_blue_card_tip .whether_right p').text('����Ҫѡ��');
    }
    var hasDebt_Card = $('#hasDebt_Card div.ChangeCK span').hasClass('whet_OK');//----------- ���Ƿ������ÿ� -----------
    if (hasDebt_Card == true) {
        $('#has_debt_card_tip .whether_right p').text('');
        var whet_OK = $('#hasDebt_Card div.ChangeCK span.whet_OK');
        var ok = whet_OK.attr('ok');
        if (ok == 'yes') {
            var MoneyDebt = $.trim($('#debt_creditcard').val());
            if (MoneyDebt.length == 0) {
                bool = false;
                $('#money_debt_card_tip').show();
                $('#money_debt_card_tip .whether_right p').text('��ҪΪ��');
            } else {
                if (isNaN(MoneyDebt)) {
                    bool = false;
                    $('#money_debt_card_tip').show();
                    $('#money_debt_card_tip .whether_right p').text('�ף�Ҫ�������');
                }
            }
            $('input[name=has_debt]').val('��');
        } else {
            $('input[name=has_debt]').val('û��');
        }
        $('input[name=debt_money]').val(MoneyDebt);
    } else {
        bool = false;
        $('#has_debt_card_tip').show();
        $('#has_debt_card_tip .whether_right p').text('����Ҫѡ��');
    }
    var hasOkApply = $('#hasOkApply div.ChangeCK span').hasClass('whet_OK');//----------- ��֮ǰ�Ƿ�ɹ�������� -----------
    if (hasOkApply == false) {
        bool = false;
        $('#has_succ_reply_tip').show();
        $('#has_succ_reply_tip .whether_right p').text('����Ҫѡ��');
    } else {
        var whet_OK = $('#hasOkApply div.ChangeCK span.whet_OK');
        var ok = whet_OK.attr('ok');
        if (ok == 'yes') {
            $('input[name=has_succ_apply]').val('��');
        } else {
            $('input[name=has_succ_apply]').val('û��');
        }
    }
    var hasDebt_Daik = $('#hasDebt_Daik div.ChangeCK span').hasClass('whet_OK');//----------- �Ƿ��и�ծ�����-----------
    if (hasDebt_Daik == true) {
        $('#has_debt_loan_tip .whether_right p').text('');
        var whet_OK = $('#hasDebt_Daik div.ChangeCK span.whet_OK');
        var ok = whet_OK.attr('ok');
        if (ok == 'yes') {
            var MoneyDebt = $.trim($('#has_money_debt_loan').val());
            if (MoneyDebt.length == 0) {
                bool = false;
                $('#money_debt_loan_tip').show();
                $('#money_debt_loan_tip .whether_right p').text('��ҪΪ��');
            } else {
                if (isNaN(MoneyDebt)) {
                    bool = false;
                    $('#money_debt_loan_tip').show();
                    $('#money_debt_loan_tip .whether_right p').text('�ף�Ҫ�������');
                }
            }
            $('input[name=has_debt_loan]').val('��');
            $('input[name=debt_loan_money]').val(MoneyDebt);
        } else {
            $('input[name=has_debt_loan]').val('û��');
        }
    } else {
        bool = false;
        $('#has_debt_loan_tip').show();
        $('#has_debt_loan_tip .whether_right p').text('����Ҫѡ��');
    }
    return bool;
}
function qiye_appyOneYZ() {
    var bool = true;
    var companyType = $('#companyType').find('div.changeOp01').children('span').hasClass('changeYes');//----------- ��˾���� -----------
    if (companyType == false) {
        bool = false;
        $('#companyType').prev('.posi').addClass('redTS');
    } else {
        $('input[name=company_type]').val($('#companyType .changeYes').attr('value'));
    }
    var hasLocalHouse = $('#hasLocalHouse').find('div.changeOp01').children('span').hasClass('changeYes');//----------- �Ƿ��б�����Ʒ�� -----------
    if (hasLocalHouse == false) {
        bool = false;
        $('#hasLocalHouse').prev('.posi').addClass('redTS');
    } else {
        $('input[name=has_house]').val($('#hasLocalHouse .changeYes').attr('value'));
    }
    var monthly = $.trim($('#monthly').val());//----------- �Թ��Ӷ�˽��ˮ -----------
    if (monthly == '�磺1��Ԫ������10000' || monthly.length == 0) {
        bool = false;
        $('#monthlyTS').show();
        $('#monthlyTS').text('�����������Ŷ');
    }
    if (isNaN(monthly)) {
        bool = false;
        $('#monthlyTS').show();
        $('#monthlyTS').text('�ף�Ҫ�������');
    }
    var BusinessTime = $('#BusinessTime').attr('value'); //----------- ��Ӫ���� -----------
    if (BusinessTime == '') {
        bool = false;
        $('#BusinessTimeTS').show();
        $('#BusinessTimeTS').text('��Ӫ���ޣ�������');
    } else {
        $('input[name=business_time]').val($('#BusinessTime').text());
    }
    return bool;
}
function gouche_appyOneYZ() {
    var bool = true;
    var hasLocalHouse = $('#hasLocalHouse').find('div.changeOp01').children('span').hasClass('changeYes');//----------- �Ƿ��б�����Ʒ�� -----------
    if (hasLocalHouse == false) {
        bool = false;
        $('#hasLocalHouse').prev('.posi').addClass('redTS');
    } else {
        $('input[name=has_house]').val($('#hasLocalHouse .changeYes').attr('value'));
    }
    var shopCarPhase = $('#shopCarPhase').find('div.changeOp01').children('span').hasClass('changeYes');//----------- �Ƿ��б�����Ʒ�� -----------
    if (shopCarPhase == false) {
        bool = false;
        $('#shopCarPhase').prev('.posi').addClass('redTS');
    } else {
        $('input[name=car_step]').val($('#shopCarPhase .changeYes').attr('value'));
    }
    var Usermoney = $.trim($('#Usermoney').val());//----------- �򿨹��� -----------
    if (Usermoney == '������ÿ�¹��ʣ���5000' || Usermoney.length == 0) {
        bool = false;
        $('#UsermoneyTS').show();
        $('#UsermoneyTS').text('�����������Ŷ');
    } else if (isNaN(Usermoney)) {
        bool = false;
        $('#UsermoneyTS').show();
        $('#UsermoneyTS').text('�ף�Ҫ�������');
    }
    return bool;
}
function goufang_appyOneYZ() {
    var bool = true;
    var houseType = $('#houseType').find('div.changeOp01').children('span').hasClass('changeYes');//----------- �������� -----------
    if (houseType == false) {
        bool = false;
        $('#houseType').prev('.posi').addClass('redTS');
    } else {
        $('input[name=house_type]').val($('#houseType .changeYes').attr('value'));
    }
    var youLocal = $('#youLocal').find('div.changeOp01').children('span').hasClass('changeYes');//----------- ���� -----------
    if (youLocal == false) {
        bool = false;
        $('#youLocal').prev('.posi').addClass('redTS');
    } else {
        $('input[name=hukou]').val($('#youLocal .changeYes').attr('value'));
    }
    var yesTwoHouse = $('#yesTwoHouse').find('div.changeOp01').children('span').hasClass('changeYes');//----------- �Ƿ���ַ� -----------
    if (yesTwoHouse == false) {
        bool = false;
        $('#yesTwoHouse').prev('.posi').addClass('redTS');
    } else {
        $('input[name=has_secondhandhouse]').val($('#yesTwoHouse .changeYes').attr('value'));
    }
    var Usermoney = $.trim($('#Usermoney').val());//----------- �򿨹��� -----------
    if (Usermoney == '������ÿ�¹��ʣ���5000' || Usermoney.length == 0) {
        bool = false;
        $('#UsermoneyTS').show();
        $('#UsermoneyTS').text('�����������Ŷ');
    } else if (isNaN(Usermoney)) {
        bool = false;
        $('#UsermoneyTS').show();
        $('#UsermoneyTS').text('�ף�Ҫ�������');
    }
    return bool;
}
function moreSearchTC_Con_BtnCK(obj) {
    var obj = $(obj);
    var btn = obj.children('input');
    btn.trigger('click');
    alert('dd');
}
function ConditionClick(obj) {
    var xindai_type;
    var url;
    xindai_type = $('#xindai_type').attr('value');
    url = $('#http_url').attr('value');
    var val = $("#xf_JobType").val();
    var reval = $("#xf_JobType option:selected").attr('reval');
    switch (xindai_type) {
        case 'xiaofei':
            var xf_JobType = $("#xf_JobType option:selected").attr('reval');
            var xf_CreditType = $('#xf_CreditType option:selected').attr('reval');
            var xf_houseType = $('#xf_houseType option:selected').attr('reval');
            url = url + '&profession=' + xf_JobType + '&credit_record=' + xf_CreditType + '&has_house=' + xf_houseType;
            break;
        case 'qiye':
            var qy_JobType = $('#qy_JobType option:selected').attr('reval');
            var qy_CreditType = $('#qy_CreditType option:selected').attr('reval');
            var qy_houseType = $('#qy_houseType option:selected').attr('reval');
            url = url + '&profession=' + qy_JobType + '&credit_record=' + qy_CreditType + '&has_house=' + qy_houseType;
            break;
        case 'goufang':
            var gf_changquanType = $('#gf_changquanType option:selected').attr('reval');
            var gf_shopHouse = $('#gf_shopHouse option:selected').attr('reval');
            var gf_homeType = $('#gf_homeType option:selected').attr('reval');
            url = url + '&house_type=' + gf_changquanType + '&first_suite=' + gf_shopHouse + '&secondhand_house=' + gf_homeType;
            break;
        case 'gouche':
            var gc_houseType = $('#gc_houseType option:selected').attr('reval');
            var gc_carNumber = $('#gc_carNumber option:selected').attr('reval');
            var gc_carUse = $('#gc_carUse option:selected').attr('reval');
            var gc_carType = $('#gc_carType option:selected').attr('reval');
            url = url + '&has_house=' + gc_houseType + '&car_number=' + gc_carNumber + '&car_use=' + gc_carUse + '&car_type=' + gc_carType;
            break;
    }
    window.location.href = url;
}
function XfSearchMonthClick(obj) {
    $('#XfSearchMonthUL').toggle();
}
function XfSearchMoneyClick(obj) {
    $('#XfSearchMoneyUL').toggle();
}
function XfSearchMoneyList(obj) {
    var obj = $(obj);
    var val = obj.attr('value');
    $('#ShopHsearchMoney').val(val);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function XfSearchMonthList(obj) {
    var obj = $(obj);
    var value = obj.attr('value');
    var unit = obj.attr('unit');
    var val = obj.attr('val');
    $('#ShopHsearchMonth').val(val);
    $('#xfSearchMonthSpan').html(unit);
    $('#xfMonthUnit').val(unit);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function QySearchMonthClick(obj) {
    $('#QySearchMonthUL').toggle();
}
function QySearchMoneyClick(obj) {
    $('#QySearchMoneyUL').toggle();
}
function QySearchMoneyList(obj) {
    var obj = $(obj);
    var val = obj.attr('value');
    $('#CompanyHsearchMoney').val(val);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function QySearchMonthList(obj) {
    var obj = $(obj);
    var value = obj.attr('value');
    var unit = obj.attr('unit');
    var val = obj.attr('val');
    $('#CompanyHsearchMonth').val(val);
    $('#qySearchMonthSpan').html(unit);
    $('#qyMonthUnit').val(unit);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function GcSearchMonthClick(obj) {
    $('#GcSearchMonthUL').toggle();
}
function GcSearchMoneyClick(obj) {
    $('#GcSearchMoneyUL').toggle();
}
function GcSearchMoneyList(obj) {
    var obj = $(obj);
    var val = obj.attr('value');
    $('#CarHsearchMoney').val(val);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function GcSearchMonthList(obj) {
    var obj = $(obj);
    var value = obj.attr('value');
    var unit = obj.attr('unit');
    var val = obj.attr('val');
    $('#CarHsearchMonth').val(val);
    $('#gcSearchMonthSpan').html(unit);
    $('#gcMonthUnit').val(unit);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function GfSearchMonthClick(obj) {
    $('#GfSearchMonthUL').toggle();
}
function GfSearchMoneyClick(obj) {
    $('#GfSearchMoneyUL').toggle();
}
function GfSearchMoneyList(obj) {
    var obj = $(obj);
    var val = obj.attr('value');
    $('#HouseHsearchMoney').val(val);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function GfSearchMonthList(obj) {
    var obj = $(obj);
    var value = obj.attr('value');
    var unit = obj.attr('unit');
    var val = obj.attr('val');
    $('#HouseHsearchMonth').val(val);
    $('#gfSearchMonthSpan').html(unit);
    $('#gfMonthUnit').val(unit);
    var li = obj.parent().children('li');
    li.removeClass('mo');
    obj.addClass('mo');
}
function YanzmFoc(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());

    if (val == '�����������֤��') {
        obj.css('color', '#999');
        obj.val('');
    }
    obj.css('color', '#333');
}
function YanzmBlu(obj) {
    var obj = $(obj);
    var vall = obj.val();
    var val = $.trim(obj.val());
    if (val == '') {
        obj.val('�����������֤��');
        obj.css('color', '#999');
    }
}
function conditionSel(obj) {
    var obj = $(obj);
    var showTit = obj.parents('.moreSearchTC_Con_li').children('span.HomeSelect_span');
    var $selectObj = obj.children('option:selected');
    var selectTit = $selectObj.text();
    showTit.text(selectTit);
}
$(document).ready(function() {
	var $selectList = $(".mHSearch_select_show");

	$.each($selectList,function (index, domEle) {
		conditionSel(domEle);
	});

});