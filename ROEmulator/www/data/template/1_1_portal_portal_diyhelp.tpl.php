<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(!$ref && $_GET['action'] == 'get') { if($allowdiy) { ?>
if(!$('diypage') && $('wp')) {
var dom = document.createElement('div');
dom.id = 'diypage';
dom.className = 'area';
$('wp').appendChild(dom);
}
$('diypage').innerHTML = '<div class="hm" style="border: 2px dashed #CDCDCD; padding:200px 0;"><p class="mbn"><button type="button" class="pn pnc" onclick="saveUserdata(\'diy_advance_mode\', 1);openDiy();"><strong>��ʼ DIY</strong></button></p>\n\<p>�Լ����֣����Լ�ӵ�и��Ե�ҳ�档��������İ�ť��ʼ DIY������\n\
<a href="javascript:saveUserdata(\'diy_advance_mode\', \'1\');saveUserdata(\'openfn\',\'drag.openFrameImport(1)\');openDiy();" class="xi2">�����������ģ��</a></p></div>';

<?php } else { ?>

if(!$('diypage') && $('wp')) {
var dom = document.createElement('div');
dom.id = 'diypage';
dom.className = 'area';
$('wp').appendChild(dom);
}
$('diypage').innerHTML = '<div class="bm hm xs2 xg1" style="padding:200px 0;">���ڽ����У����Ժ򡭡�</div>';

<?php } } ?>