Jquery(document).ready(function() {
});
function xfCheckOneForm(bool) {
    var id_name = 'salary';
    var salary = Jquery('#salary_inp_hidden').val();
    var wage = Jquery.trim(Jquery('#salary_inp').val());
    if (salary == '') {
        var dom = Jquery('#' + id_name + 'Tip').show();
        bool = false;
    } else {
        if (!isNaN(salary)) {
            if (salary > 1000000) {
                var dom = Jquery('#salaryTip').show();
                Jquery('#salaryTip').text('��100����');
                bool = false;
            } else {
                var dom = Jquery('#salaryTip').hide();
                bool = true;
            }
        } else {
            var dom = Jquery('#salaryTip').show();
            Jquery('#salaryTip').text('���봿����');
            bool = false;
        }
    }
    var id_name = 'qiye_type';
    var qiye_type = Jquery('#qiye_type_inp_hidden').val();
    if (qiye_type == '') {
        var dom = Jquery('#' + id_name + 'Tip').show();
        bool = false;
    }
    var id_name = 'salary_type';
    var salary_type = Jquery('input[name="' + id_name + '"]:checked').val();
    if (typeof (salary_type) == 'undefined') {
        var dom = Jquery('#' + id_name + 'Tip').show();
        bool = false;
    }
    var id_name = 'year_born';
    var year_born = Jquery('#year_born_inp').val();
    alert(year_born);
    if (year_born == '') {
        Jquery('#' + id_name + 'Tip').html('��ش�����');
        Jquery('#' + id_name + 'Tip').show();
        bool = false;
    } else {
        if (year_born < 1900) {
            Jquery('#' + id_name + 'Tip').html('������ô����');
            var dom = Jquery('#' + id_name + 'Tip').show();
            bool = false;
        }
    }

    var jobyear = Jquery.trim(Jquery('#work_year').val());        //-------------------���Ĺ���ʱ�� - �� start ---------------------------
    var job_year_placeholder = Jquery('input[name="job_year"]').attr('placeholder');   //IE6����ʾ��
    var id_name = 'jobtime';
    if (job_year_placeholder == jobyear) {
        jobyear = '';
    }
    if (jobyear == '' && jobmonth == '') {
        var dom = Jquery('#' + id_name + 'Tip').show();
        bool = false
    } else {
        if (!isNaN(jobyear)) {
            if ((jobyear < 0) || (jobyear > 100)) {
                var dom = Jquery('.jobtime').show();
                Jquery('.jobtime').text('0<����<45');
                bool = false;
            }
        } else {
            var dom = Jquery('.jobtime').show();
            Jquery('.jobtime').text('���봿����');
            bool = false;
        }
    }//-------------------���Ĺ���ʱ�� - �� over  ---------------------------
    var jobmonth = Jquery.trim(Jquery('#work_month').val());  //-------------------���Ĺ���ʱ�� - �� start  ---------------
    var job_month_placeholder = Jquery('input[name="job_month"]').attr('placeholder');   //IE6����ʾ��

    if (job_month_placeholder == jobmonth) {
        jobmonth = '';
    }
    if (jobyear == '' && jobmonth == '') {
        var dom = Jquery('#' + id_name + 'Tip').show();
        bool = false;
    } else {
        if (!isNaN(jobmonth)) {
            if ((jobmonth < 0) || (jobmonth > 11)) {
                var dom = Jquery('.jobtime').show();
                Jquery('.jobtime').text('0<=����<12');
                bool = false;
            }
        } else {
            var dom = Jquery('.jobtime').show();
            Jquery('.jobtime').text('���봿����');
            bool = false;
        }
    }     //------------------- ���Ĺ���ʱ�� - �� over ---------------------------
    return bool;
}
function xfCheckTwoForm(bool) {
    var bool = true;
    var has_blue_card = isHas(Jquery('input[name="has_blue_card"]:checked').val());
    if (has_blue_card == '') {
        bool = false;
        Jquery('#has_blue_card_tip').show();
    }
    if (has_blue_card == '��') {
        var count_blue_card = Jquery('input[name="count_blue_card"]').val();             //1.1���м������ÿ�
        if (count_blue_card == '') {
            bool = false;
            Jquery('#count_blue_card_tip').show();
        } else {
            if (isNaN(count_blue_card)) {
                bool = false;
                Jquery('#count_blue_card_tip').html('�����봿����');
                Jquery('#count_blue_card_tip').show();
            } else {
                if (count_blue_card < 0) {
                    bool = false;
                    Jquery('#count_blue_card_tip').html('����Ϊ����');
                    Jquery('#count_blue_card_tip').show();
                } else if (count_blue_card > 10000) {
                    bool = false;
                    Jquery('#count_blue_card_tip').html('���10000��');
                    Jquery('#count_blue_card_tip').show();
                } else {
                    Jquery('#count_blue_card_tip').hide();
                }
            }
        }
        var money_blue_card = Jquery('input[name="money_blue_card"]').val();            //1.2����ܶ��Ƕ���
        if (money_blue_card == '') {
            bool = false;
            Jquery('#money_blue_card_tip').show();
        } else {
            if (isNaN(money_blue_card)) {
                bool = false;
                Jquery('#money_blue_card_tip').html('�����봿����');
                Jquery('#money_blue_card_tip').show();
            } else {
                if (money_blue_card < 0) {
                    bool = false;
                    Jquery('#money_blue_card_tip').html('����Ϊ����');
                    Jquery('#money_blue_card_tip').show();
                } else if (money_blue_card > 8000000) {
                    bool = false;
                    Jquery('#money_blue_card_tip').html('800����');
                    Jquery('#money_blue_card_tip').show();
                } else {
                    Jquery('#money_blue_card_tip').hide();
                }
            }
        }
    } else {
        Jquery('input[name="count_blue_card"]').val('');
        Jquery('input[name="money_blue_card"]').val('');
    }

    var has_debt_card = isHas(Jquery('input[name="has_debt_card"]:checked').val());
    if (has_debt_card == '') {
        bool = false;
        Jquery('#has_debt_card_tip').show();
    }
    if (has_debt_card == '��') {
        var money_debt_card = Jquery('input[name="money_debt_card"]').val();             //2.1��ծ����
        if (money_debt_card == '') {
            bool = false;
            Jquery('#money_debt_card_tip').show();
        } else {
            if (isNaN(money_debt_card)) {
                bool = false;
                Jquery('#money_debt_card_tip').html('�����봿����');
                Jquery('#money_debt_card_tip').show();
            } else {
                if (money_debt_card < 0) {
                    bool = false;
                    Jquery('#money_debt_card_tip').html('����Ϊ����');
                    Jquery('#money_debt_card_tip').show();
                } else if (money_debt_card > 8000000) {
                    bool = false;
                    Jquery('#money_debt_card_tip').html('800����');
                    Jquery('#money_debt_card_tip').show();
                } else {
                    Jquery('#money_debt_card_tip').hide();
                }
            }
        }
    }
    else {
        Jquery('input[name="money_debt_card"]').val('');
    }
    var has_succ_reply = isHas(Jquery('input[name="has_succ_reply"]:checked').val());
    if (has_succ_reply == '') {
        bool = false;
        Jquery('#has_succ_reply_tip').show();
    } else {
        Jquery('#has_succ_reply_tip').hide();
    }
    var has_debt_loan = isHas(Jquery('input[name="has_debt_loan"]:checked').val());
    if (has_debt_loan == '') {
        bool = false;
        Jquery('#has_debt_loan_tip').show();
    }
    if (has_debt_loan == '��') {
        var money_debt_loan = Jquery('input[name="money_debt_loan"]').val();             //4.1��ծ����
        if (money_debt_loan == '') {
            bool = false;
            Jquery('#money_debt_loan_tip').show();
        } else {
            if (isNaN(money_debt_loan)) {
                bool = false;
                Jquery('#money_debt_loan_tip').html('�����봿����');
                Jquery('#money_debt_loan_tip').show();
            } else {
                if (money_debt_loan < 0) {
                    bool = false;
                    Jquery('#money_debt_loan_tip').html('����Ϊ����');
                    Jquery('#money_debt_loan_tip').show();
                } else if (money_debt_loan > 8000000) {
                    bool = false;
                    Jquery('#money_debt_loan_tip').html('800����');
                    Jquery('#money_debt_loan_tip').show();
                } else {
                    Jquery('#money_debt_loan_tip').hide();
                }
            }
        }
    }
    else {
        Jquery('input[name="money_debt_loan"]').val('');
    }
    return bool;
}


Jquery(document).ready(function() {
    yesno();
    hidetip();
});
function yesno() {
    var tab_yes = Jquery('.ipttab_yes');
    var tab_no = Jquery('.ipttab_no');
    tab_yes.click(function() {
        var tab_con = Jquery(this).parent().parent().parent().parent().children('.xinpu');
        Jquery(this).parent().parent().children('.tishi').hide();
        tab_con.show();
        xf_juzhong();
    });
    tab_no.click(function() {
        var tab_con = Jquery(this).parent().parent().parent().parent().children('.xinpu');
        Jquery(this).parent().parent().children('.tishi').hide();
        tab_con.hide();
        xf_juzhong();
    });
    var tab_yes2 = Jquery('.ipttab_yes2');
    var tab_no2 = Jquery('.ipttab_no2');
    tab_yes2.click(function() {
        Jquery(this).parent().parent().children('.tishi').hide();
        xf_juzhong();
    });
    tab_no2.click(function() {
        Jquery(this).parent().parent().children('.tishi').hide();
        xf_juzhong();
    });
}
function xf_juzhong() {
    if (jQuery.browser.msie && (jQuery.browser.version == "6.0") && !jQuery.support.style) {
        Jquery('.tipbox').css({});
    } else {
        Jquery('.tipbox').css({
            top: ((Jquery(window).height() - Jquery('.tipbox').outerHeight()) / 2),
            left: (Jquery(window).width() - Jquery(".tipbox").outerWidth()) / 2
        });
    }
}

function hidetip() {
    var tip = Jquery('.tishi');
    var ipt = Jquery('.sinp');
    ipt.click(function() {
        Jquery(this).parent().parent().children('.tishi').hide();
    });
}