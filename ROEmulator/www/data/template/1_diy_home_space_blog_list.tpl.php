<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_blog_list');
0
|| checktplrefresh('./template/default/home/space_blog_list.htm', './template/default/home/space_header.htm', 1569968206, 'diy', './data/template/1_diy_home_space_blog_list.tpl.php', './template/default', 'home/space_blog_list')
|| checktplrefresh('./template/default/home/space_blog_list.htm', './template/default/common/userabout.htm', 1569968206, 'diy', './data/template/1_diy_home_space_blog_list.tpl.php', './template/default', 'home/space_blog_list')
|| checktplrefresh('./template/default/home/space_blog_list.htm', './template/default/home/space_userabout.htm', 1569968206, 'diy', './data/template/1_diy_home_space_blog_list.tpl.php', './template/default', 'home/space_blog_list')
|| checktplrefresh('./template/default/home/space_blog_list.htm', './template/default/common/header_common.htm', 1569968206, 'diy', './data/template/1_diy_home_space_blog_list.tpl.php', './template/default', 'home/space_blog_list')
|| checktplrefresh('./template/default/home/space_blog_list.htm', './template/default/home/space_diy.htm', 1569968206, 'diy', './data/template/1_diy_home_space_blog_list.tpl.php', './template/default', 'home/space_blog_list')
|| checktplrefresh('./template/default/home/space_blog_list.htm', './template/default/home/space_header_personalnv.htm', 1569968206, 'diy', './data/template/1_diy_home_space_blog_list.tpl.php', './template/default', 'home/space_blog_list')
;?>
<?php $_G[home_tpl_spacemenus][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=blog&amp;view=me\">TA ��������־</a>";
$friendsname = array(1 => '�����ѿɼ�',2 => 'ָ�����ѿɼ�',3 => '���Լ��ɼ�',4 => 'ƾ����ɼ�');?><?php if($diymode) { if($_G['setting']['homepagestyle']) { $_G[cookie][extstyle] = false;?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_1_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_1_home_space.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_space.css?<?php echo VERHASH;?>' />
<link id="style_css" rel="stylesheet" type="text/css" href="<?php echo STATICURL;?>space/<?php if($space['theme']) { ?><?php echo $space['theme'];?><?php } else { ?>t1<?php } ?>/style.css?<?php echo VERHASH;?>">
<style id="diy_style"><?php echo $space['spacecss'];?></style>
</head>

<body id="space" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<?php if($space['self'] && $_GET['diy'] == 'yes' && $do == 'index' ) { ?>
<link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>' /><div id="controlpanel" class="cl">
<div id="controlheader" class="cl">
<p class="y">
<span id="navcancel"><a href="javascript:;" onclick="spaceDiy.cancel();return false;">�ر�</a></span>
<span id="navsave"><a href="javascript:;" onclick="javascript:spaceDiy.save();return false;">����</a></span>
<span id="button_redo" class="unusable"><a href="javascript:;" onclick="spaceDiy.redo();return false;" title="����" onfocus="this.blur();">����</a></span>
<span id="button_undo" class="unusable"><a href="javascript:;" onclick="spaceDiy.undo();return false;" title="����" onfocus="this.blur();">����</a></span>
</p>
<ul id="controlnav">
<li id="navstart" class="current"><a href="javascript:" onclick="spaceDiy.getdiy('start');this.blur();return false;">��ʼ</a></li>
<li id="navlayout"><a href="javascript:;" onclick="spaceDiy.getdiy('layout');this.blur();return false;">��ʽ/����</a></li>
<li id="navstyle"><a href="javascript:;" onclick="spaceDiy.getdiy('style');this.blur();return false;">���</a></li>
<li id="navblock"><a href="javascript:;" onclick="spaceDiy.getdiy('block');this.blur();return false;">ģ��</a></li>
<li id="navdiy"><a href="javascript:;" onclick="spaceDiy.getdiy('diy');this.blur();return false;">�Զ���װ��</a></li>
</ul>
</div>
<div id="controlcontent" class="cl">
<ul id="contentstart" class="content">
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('layout');return false;"><img src="<?php echo STATICURL;?>image/diy/layout.png" />��ʽ</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('style');return false;"><img src="<?php echo STATICURL;?>image/diy/style.png" />���</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('block');return false;"><img src="<?php echo STATICURL;?>image/diy/module.png" />���ģ��</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('diy', 'topicid', '<?php echo $topic['topicid'];?>');return false;"><img src="<?php echo STATICURL;?>image/diy/diy.png" />�Զ���</a></li>
</ul>
</div>
<div id="cpfooter"><table cellpadding="0" cellspacing="0" width="100%"><tr><td class="l">&nbsp;</td><td class="c">&nbsp;</td><td class="r">&nbsp;</td></tr></table></div>
</div>
<form method="post" autocomplete="off" name="diyform" action="home.php?mod=spacecp&amp;ac=index">
<input type="hidden" name="spacecss" value="" />
<input type="hidden" name="style" value="<?php echo $space['theme'];?>" />
<input type="hidden" name="layoutdata" value="" />
<input type="hidden" name="currentlayout" value="<?php echo $userdiy['currentlayout'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="diysubmit" value="true"/>
</form><?php } ?>

<div id="toptb" class="cl">
<?php if($_G['uid']) { ?>
<div class="y">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" class="xw1" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a>
<a href="javascript:;" id="myspace" class="showmenu cur1" onmouseover="showMenu(this.id);">��ݵ���</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<a href="home.php?mod=spacecp">����</a>
<a href="home.php?mod=space&amp;do=pm" id="pm_ntc" target="_blank"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } ?></a>
<a href="home.php?mod=space&amp;do=notice" id="myprompt" target="_blank"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>����<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['group']['allowmanagearticle'] || $_G['group']['allowdiy']|| getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3) || in_array($_G['uid'], $_G['setting']['ext_portalmanager'])) { ?><a href="portal.php?mod=portalcp">�Ż�����</a><?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a><?php } if($_G['uid'] && ($_G['group']['radminid'] == 1 || getstatus($_G['member']['allowadmincp'], 1))) { ?><a href="admin.php" target="_blank">��������</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
<?php if($space['self'] && $do == 'index') { ?><a id="diy-tg" href="javascript:openDiy();" title="װ��ռ�">DIY</a><?php } ?>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<div class="y">
<a id="loginuser" class="xw1"><?php echo $_G['cookie']['loginuser'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">����</a>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</div>
<?php } elseif($_G['connectguest']) { ?>
<div class="y">
<a href="member.php?mod=connect" target="_blank">�����ʺ���Ϣ</a> <a href="member.php?mod=connect&amp;ac=bind" target="_blank">�������ʺ�</a>
</div>
<?php } else { ?>
<div class="y">
<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>"><?php echo $_G['setting']['reglinkname'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">��¼</a>
</div>
<?php } ?>
<div class="z">
<a href="./" title="<?php echo $_G['setting']['bbname'];?>" class="xw1"><?php echo $_G['setting']['bbname'];?></a>
<a href="home.php?mod=space&amp;do=home" id="navs" class="showmenu" onmouseover="showMenu(this.id);">������ҳ</a>
</div>
</div>
<?php if($space['status'] == -1 && $_G['adminid'] == 1 ) { ?>
<p class="ptw xw1 xi1 hm"><img src="<?php echo IMGDIR;?>/locked.gif" alt="Locked" class="vm" /> ��ʾ: ���߱���ֹ��ɾ�� �����Զ����Σ�ֻ�й���Ա�ɼ�</p>
<?php } ?>
<div id="hd" class="wp cl">

<h2 id="spaceinfoshow"><?php space_merge($space, 'field_home'); $space[domainurl] = space_domain($space);getuserdiydata($space);$personalnv = isset($_G['blockposition']['nv']) ? $_G['blockposition']['nv'] : '';?><strong id="spacename" class="mbn">
<?php if($space['spacename']) { ?><?php echo $space['spacename'];?><?php } else { ?><?php echo $space['username'];?>�ĸ��˿ռ�<?php } ?>
</strong>
<span class="xs0 xw0">
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '�ռ��ַ���Ƴɹ�');return false;"><?php echo $space['domainurl'];?></a>
<a href="javascript:;" onclick="addFavorite(location.href, document.title)">[�ղ�]</a>
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '�ռ��ַ���Ƴɹ�');return false;">[����]</a>
<?php if(!$space['self']) { if(helper_access::check_module('share')) { ?>
<a id="share_space" href="home.php?mod=spacecp&amp;ac=share&amp;type=space&amp;id=<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">[����]</a>
<?php } ?>
<a href="home.php?mod=rss&amp;uid=<?php echo $space['uid'];?>">[RSS]</a>
<?php } ?>
</span>
<span id="spacedescription" class="xs1 xw0 mtn"><?php echo $space['spacedescription'];?></span>
</h2><?php if($_G['adminid'] == 1 && empty($space['self'])) { $personalnv['items'] = array(); $personalnv['banitems'] = array(); $personalnv['nvhidden'] = 0;?><?php } $nvclass = !empty($personalnv['nvhidden']) ? ' class="mininv"' : '';?><div id="nv">
<ul<?php echo $nvclass;?>>
<?php if(empty($personalnv['nvhidden'])) { if(empty($personalnv['banitems']['index'])) { if($_G['adminid'] == 1 && $_G['setting']['allowquickviewprofile'] == 1) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index&amp;view=admin"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>�ռ���ҳ<?php } ?></a></li>
<?php } else { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>�ռ���ҳ<?php } ?></a></li>
<?php } } if(empty($personalnv['banitems']['feed']) && helper_access::check_module('feed')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=home&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['feed'])) { ?><?php echo $personalnv['items']['feed'];?><?php } else { ?>��̬<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['doing']) && helper_access::check_module('doing')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=doing&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['doing'])) { ?><?php echo $personalnv['items']['doing'];?><?php } else { ?>��¼<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['blog']) && helper_access::check_module('blog')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['blog'])) { ?><?php echo $personalnv['items']['blog'];?><?php } else { ?>��־<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['album']) && helper_access::check_module('album')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['album'])) { ?><?php echo $personalnv['items']['album'];?><?php } else { ?>���<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['follow']) && helper_access::check_module('follow')) { ?>
<li><a href="home.php?mod=follow&amp;uid=<?php echo $space['uid'];?>&amp;do=view"><?php if(!empty($personalnv['items']['follow'])) { ?><?php echo $personalnv['items']['follow'];?><?php } else { ?>�㲥<?php } ?></a></li>
<?php } if($_G['setting']['allowviewuserthread'] !== false && (empty($personalnv['banitems']['topic']))) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['topic'])) { ?><?php echo $personalnv['items']['topic'];?><?php } else { ?>����<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['share']) && helper_access::check_module('share')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=share&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['share'])) { ?><?php echo $personalnv['items']['share'];?><?php } else { ?>����<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['wall']) && helper_access::check_module('wall')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall"><?php if(!empty($personalnv['items']['wall'])) { ?><?php echo $personalnv['items']['wall'];?><?php } else { ?>���԰�<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['profile'])) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=profile"><?php if(!empty($personalnv['items']['profile'])) { ?><?php echo $personalnv['items']['profile'];?><?php } else { ?>��������<?php } ?></a></li>
<?php } } ?>
</ul>
</div></div>

<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?>     <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
     <li><?php echo $module['url'];?></li>
     <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?><?php $mnid = getcurrentnav();?><ul id="navs_menu" class="p_pop topnav_pop" style="display:none;"><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { $nav_showmenu = strpos($nav['nav'], 'onmouseover="showMenu(');?>    <?php $nav_navshow = strpos($nav['nav'], 'onmouseover="navShow(')?>    <?php if($nav_hidden !== false || $nav_navshow !== false) { $nav['nav'] = preg_replace("/onmouseover\=\"(.*?)\"/i", '',$nav['nav'])?>    <?php } ?>
    <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<ul id="myspace_menu" class="p_pop" style="display:none;">
    <li><a href="home.php?mod=space">�ҵĿռ�</a></li><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h">
<?php if($space['self'] && helper_access::check_module('blog')) { ?><span class="xi2 y"> <a href="home.php?mod=spacecp&amp;ac=blog" class="addnew">��������־</a></span><?php } ?>
<h1 class="mt">��־</h1>
</div>
<div class="bm_c">
<?php } else { include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me">��־</a>
</div>
</div>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div><?php include template('home/space_menu'); ?><div id="ct" class="ct1 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<div class="bm_c">
<?php } } else { include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;do=blog">��־</a>
</div>
</div>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="ct" class="ct2_a wp cl">
<?php if($_G['setting']['homestyle']) { ?>
<div class="appl"><?php if(!empty($_G['setting']['pluginhooks']['global_userabout_top'][$_G['basescript'].'::'.CURMODULE])) echo $_G['setting']['pluginhooks']['global_userabout_top'][$_G['basescript'].'::'.CURMODULE];?><?php getuserapp(1);?><ul><?php if(is_array($_G['setting']['spacenavs'])) foreach($_G['setting']['spacenavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { if(in_array($nav['code'], array('userpanelarea1', 'userpanelarea2'))) { if(!empty($_G['my_panelapp']) && $_G['setting']['my_app_status']) { if($nav['code']=='userpanelarea1' && !empty($_G['my_panelapp']['1'])) { if(is_array($_G['my_panelapp']['1'])) foreach($_G['my_panelapp']['1'] as $appid => $app) { ?><li>
<a href="userapp.php?mod=app&amp;id=<?php echo $app['appid'];?>" title="<?php echo $app['appname'];?>"><img <?php if($app['icon']) { ?>src="<?php echo $app['icon'];?>" onerror="this.onerror=null;this.src='http://appicon.manyou.com/icons/<?php echo $app['appid'];?>'"<?php } else { ?> src="http://appicon.manyou.com/icons/<?php echo $app['appid'];?>"<?php } ?> name="<?php echo $appid;?>" alt="<?php echo $app['appname'];?>" /><?php echo $app['appname'];?></a>
</li>
<?php } } elseif($nav['code']=='userpanelarea2' && !empty($_G['my_panelapp']['2'])) { if(is_array($_G['my_panelapp']['2'])) foreach($_G['my_panelapp']['2'] as $appid => $app) { ?><li>
<a href="userapp.php?mod=app&amp;id=<?php echo $app['appid'];?>" title="<?php echo $app['appname'];?>"><img <?php if($app['icon']) { ?>src="<?php echo $app['icon'];?>" onerror="this.onerror=null;this.src='http://appicon.manyou.com/icons/<?php echo $app['appid'];?>'"<?php } else { ?> src="http://appicon.manyou.com/icons/<?php echo $app['appid'];?>"<?php } ?> name="<?php echo $appid;?>" alt="<?php echo $app['appname'];?>" /><?php echo $app['appname'];?></a>
</li>
<?php } } } } else { ?>
<?php echo $nav['code'];?>
<?php } } } ?>
</ul>
<?php if($_G['setting']['my_app_status']) { if(!empty($_G['cache']['userapp'])) { ?>
<ul id="my_defaultapp"><?php if(is_array($_G['cache']['userapp'])) foreach($_G['cache']['userapp'] as $value) { ?><li><a href="userapp.php?mod=app&amp;id=<?php echo $value['appid'];?>" title="<?php echo $value['appname'];?>"><img <?php if($value['icon']) { ?>src="<?php echo $value['icon'];?>" onerror="this.onerror=null;this.src='http://appicon.manyou.com/icons/<?php echo $value['appid'];?>'"<?php } else { ?> src="http://appicon.manyou.com/icons/<?php echo $value['appid'];?>"<?php } ?> alt="<?php echo $value['appname'];?>" /><?php echo $value['appname'];?></a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['userapp_menu_top'])) echo $_G['setting']['pluginhooks']['userapp_menu_top'];?>
</ul>
<?php } if($_G['my_menu']) { ?>
<ul id="my_userapp"><?php if(is_array($_G['my_menu'])) foreach($_G['my_menu'] as $value) { ?><li id="userapp_li_<?php echo $value['appid'];?>"><a href="userapp.php?mod=app&amp;id=<?php echo $value['appid'];?>" title="<?php echo $value['appname'];?>"><img <?php if($value['icon']) { ?>src="<?php echo $value['icon'];?>" onerror="this.onerror=null;this.src='http://appicon.manyou.com/icons/<?php echo $value['appid'];?>'"<?php } else { ?> src="http://appicon.manyou.com/icons/<?php echo $value['appid'];?>"<?php } ?> alt="<?php echo $value['appname'];?>" /><?php echo $value['appname'];?></a></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['userapp_menu_middle'])) echo $_G['setting']['pluginhooks']['userapp_menu_middle'];?>
</ul>
<?php } if($_G['my_menu_more']) { ?>
<p class="pbm bbda xg1 cl"><a href="javascript:;" class="unfold" id="a_app_more" onclick="userapp_open();">չ��</a></p>
<?php } if(checkperm('allowmyop')) { ?>
<ul class="myo mtm">
<li><a href="userapp.php?mod=manage&amp;my_suffix=%2Fapp%2Flist%3Fsort%3Dtime"><img src="<?php echo IMGDIR;?>/app_add.gif" alt="app_add" />���<?php echo $_G['setting']['navs']['5']['navname'];?></a></li>
<li><a href="userapp.php?mod=manage&amp;ac=menu"><img src="<?php echo IMGDIR;?>/app_set.gif" alt="app_set" />����<?php echo $_G['setting']['navs']['5']['navname'];?></a></li>
</ul>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_userabout_bottom'][$_G['basescript'].'::'.CURMODULE])) echo $_G['setting']['pluginhooks']['global_userabout_bottom'][$_G['basescript'].'::'.CURMODULE];?></div>
<div class="mn pbm">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<h1 class="mt"><img alt="blog" src="<?php echo STATICURL;?>image/feed/blog.gif" class="vm" /> ��־</h1>
<ul class="tb cl">
<li<?php echo $actives['we'];?>><a href="home.php?mod=space&amp;do=blog&amp;view=we">���ѵ���־</a></li>
<li<?php echo $actives['me'];?>><a href="home.php?mod=space&amp;do=blog&amp;view=me">�ҵ���־</a></li>
<li<?php echo $actives['all'];?>><a href="home.php?mod=space&amp;do=blog&amp;view=all">��㿴��</a></li>
<?php if(helper_access::check_module('blog')) { ?>
<li class="o"><a href="home.php?mod=spacecp&amp;ac=blog">��������־</a></li>
<?php } ?>
</ul>
</div>
<?php } else { ?>
<div class="appl">
<div class="tbn">
<h2 class="mt bbda">��־</h2>
<ul>
<li<?php echo $actives['we'];?>><a href="home.php?mod=space&amp;do=blog&amp;view=we">���ѵ���־</a></li>
<li<?php echo $actives['me'];?>><a href="home.php?mod=space&amp;do=blog&amp;view=me">�ҵ���־</a></li>
<li<?php echo $actives['all'];?>><a href="home.php?mod=space&amp;do=blog&amp;view=all">��㿴��</a></li>
</ul>
</div>
</div>
<div class="mn pbm">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<?php } } ?>
<div class="tbmu cl">
<?php if(helper_access::check_module('blog') && $space['self'] && (($diymode && !$_G['setting']['homepagestyle']) || (!$diymode && !$_G['setting']['homestyle']))) { ?>
<a href="home.php?mod=spacecp&amp;ac=blog" class="y pn pnc"><strong>��������־</strong></a>
<?php } if($_GET['view'] == 'all') { ?>
<a href="home.php?mod=space&amp;do=blog&amp;view=all" <?php if(!$_GET['catid']) { ?><?php echo $orderactives['dateline'];?><?php } ?>>���·������־</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=blog&amp;view=all&amp;order=hot" <?php echo $orderactives['hot'];?>>�Ƽ��Ķ�����־</a>
<?php if($category) { if(is_array($category)) foreach($category as $value) { ?><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=blog&amp;catid=<?php echo $value['catid'];?>&amp;view=all&amp;order=<?php echo $_GET['order'];?>"<?php if($_GET['catid']==$value['catid']) { ?> class="a"<?php } ?>><?php echo $value['catname'];?></a>
<?php } } } if($userlist) { ?>
������ɸѡ
<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
<option value="">ȫ������</option><?php if(is_array($userlist)) foreach($userlist as $value) { ?><option value="<?php echo $value['fuid'];?>"<?php echo $fuid_actives[$value['fuid']];?>><?php echo $value['fusername'];?></option>
<?php } ?>
</select>
<?php } if($_GET['view'] == 'me' && $classarr) { if(is_array($classarr)) foreach($classarr as $classid => $classname) { ?><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;classid=<?php echo $classid;?>&amp;view=me" id="classid<?php echo $classid;?>" onmouseover="showMenu(this.id);"<?php if($_GET['classid']==$classid) { ?> class="a"<?php } ?>><?php echo $classname;?></a><span class="pipe">|</span>
<?php if($space['self']) { ?>
<div id="classid<?php echo $classid;?>_menu" class="p_pop" style="display: none; zoom: 1;">
<a href="home.php?mod=spacecp&amp;ac=class&amp;op=edit&amp;classid=<?php echo $classid;?>" id="c_edit_<?php echo $classid;?>" onclick="showWindow(this.id, this.href, 'get', 0);">�༭</a>
<a href="home.php?mod=spacecp&amp;ac=class&amp;op=delete&amp;classid=<?php echo $classid;?>" id="c_delete_<?php echo $classid;?>" onclick="showWindow(this.id, this.href, 'get', 0);">ɾ��</a>
</div>
<?php } } } ?>
</div>

<?php if($searchkey) { ?>
<p class="tbmu">������������־ <span style="color: red; font-weight: 700;"><?php echo $searchkey;?></span> ����б�</p>
<?php } if($count) { ?>
<div class="xld <?php if(empty($diymode)) { ?>xlda<?php } ?>"><?php if(is_array($list)) foreach($list as $k => $value) { ?><dl class="bbda">
<?php if(empty($diymode)) { ?>
<dd class="m">
<div class="avt"><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" c="1"><?php echo avatar($value[uid],small);?></a></div>
</dd>
<?php } ?>

<dt class="xs2"><?php $stickflag = isset($value['stickflag']) ? 0 : 1;?><?php if(!$stickflag) { ?><span class="xi1">�ö�</span> &middot;<?php } if(helper_access::check_module('share')) { ?>
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=blog&amp;id=<?php echo $value['blogid'];?>&amp;handlekey=lsbloghk_<?php echo $value['blogid'];?>" id="a_share_<?php echo $value['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr xs1 xw0">����</a>
<?php } ?>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;id=<?php echo $value['blogid'];?>"<?php if($value['magiccolor']) { ?> style="color: <?php echo $_G['colorarray'][$value['magiccolor']];?>"<?php } ?> target="_blank"><?php echo $value['subject'];?></a>
<?php if($value['status'] == 1) { ?> <span class="xi1">(�����)</span><?php } ?>
</dt>
<dd>
<?php if($value['friend']) { ?>
<span class="y"><a href="<?php echo $theurl;?>&friend=<?php echo $value['friend'];?>" class="xg1"><?php echo $friendsname[$value['friend']];?></a></span>
<?php } if(empty($diymode)) { ?><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>"><?php echo $value['username'];?></a> <?php } ?><span class="xg1"><?php echo $value['dateline'];?></span>
</dd>
<dd class="cl" id="blog_article_<?php echo $value['blogid'];?>">
<?php if($value['pic']) { ?><div class="atc"><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;id=<?php echo $value['blogid'];?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['subject'];?>" class="tn" /></a></div><?php } ?>
<?php echo $value['message'];?>
</dd>
<dd class="xg1">
<?php if($classarr[$value['classid']]) { ?>���˷���: <a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;classid=<?php echo $value['classid'];?>&amp;view=me"><?php echo $classarr[$value['classid']];?></a><span class="pipe">|</span><?php } if($value['viewnum']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;id=<?php echo $value['blogid'];?>" target="_blank"><?php echo $value['viewnum'];?> ���Ķ�</a><span class="pipe">|</span><?php } ?>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;id=<?php echo $value['blogid'];?>#comment" target="_blank"><span id="replynum_<?php echo $value['blogid'];?>"><?php echo $value['replynum'];?></span> ������</a>
<?php if(!empty($_G['setting']['pluginhooks']['space_blog_list_status'][$k])) echo $_G['setting']['pluginhooks']['space_blog_list_status'][$k];?>
<?php if($_GET['view']=='me' && $space['self']) { ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $value['blogid'];?>&amp;op=edit">�༭</a><span class="pipe">|</span>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $value['blogid'];?>&amp;op=delete&amp;handlekey=delbloghk_<?php echo $value['blogid'];?>" id="blog_delete_<?php echo $value['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">ɾ��</a>
<?php if(empty($value['status'])) { ?>
<span class="pipe">|</span>

<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $value['blogid'];?>&amp;op=stick&amp;stickflag=<?php echo $stickflag;?>&amp;handlekey=stickbloghk_<?php echo $value['blogid'];?>" id="blog_stick_<?php echo $value['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);"><?php if($stickflag) { ?>�ö�<?php } else { ?>ȡ���ö�<?php } ?></a>
<?php } } if($value['hot']) { ?><span class="hot">�ȶ� <em><?php echo $value['hot'];?></em> </span><?php } ?>
</dd>
</dl>
<?php } if($pricount) { ?>
<p class="mtm">��ҳ�� <?php echo $pricount;?> ƪ��־�����ߵ���˽���û�δͨ����˶�����</p>
<?php } ?>
</div>
<?php if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } } else { ?>
<div class="emp">��û����ص���־</div>
<?php } if(!$_G['setting']['homepagestyle']) { ?><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><?php } if($diymode) { ?>
</div>
</div>
<?php if($_G['setting']['homepagestyle']) { ?>
</div>
<div class="sd"><div id="pcd" class="bm cl"><?php $encodeusername = rawurlencode($space[username]);?><div class="bm_c">
<div class="hm">
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>" class="avtm"><?php echo avatar($space[uid],middle);?></a></p>
<h2 class="xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></h2>
</div>
<ul class="xl xl2 cl ul_list">
<?php if($space['self']) { if($_G['setting']['homepagestyle']) { ?>
<li class="ul_diy"><a href="home.php?mod=space&amp;do=index&amp;diy=yes">װ��ռ�</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_msg"><a href="home.php?mod=space&amp;do=wall">�鿴����</a></li>
<?php } ?>
<li class="ul_avt"><a href="home.php?mod=spacecp&amp;ac=avatar">�༭ͷ��</a></li>
<li class="ul_profile"><a href="home.php?mod=spacecp&amp;ac=profile">��������</a></li>
<?php } else { if(helper_access::check_module('follow')) { ?>
<li class="ul_broadcast"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>">�鿴�㲥</a></li>
<?php } if(helper_access::check_module('follow') && $space['uid'] != $_G['uid']) { ?>
<li class="ul_flw"><?php $follow = 0;?><?php $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);?><?php if(!$follow) { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $space['uid'];?>">����TA</a>
<?php } else { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $space['uid'];?>">ȡ������</a>
<?php } ?>
</li>
<?php } require_once libfile('function/friend');$isfriend=friend_check($space[uid]);?><?php if(!$isfriend) { ?>
<li class="ul_add"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend_li_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">��Ϊ����</a></li>
<?php } else { ?>
<li class="ul_ignore"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">�������</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_contect"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">��������</a></li>
<?php } ?>
<li class="ul_poke"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">����к�</a></li>

<li class="ul_pm"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $space['uid'];?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">������Ϣ</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { ?>
<hr class="da mtn m0">
<ul class="ptn xl xl2 cl">
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">�û�����</a>
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">�û�����</a>
<?php } ?>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $encodeusername;?>" id="umanageli" onmouseover="showMenu(this.id)" class="showmenu">���ݹ���</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="width: 80px; display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">��ֹ�û�</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">�༭�û�</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="width: 80px; display:none;">
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;searchsubmit=1&amp;do=search&amp;users=<?php echo $encodeusername;?>" target="_blank">��������</a></li>
<?php if(helper_access::check_module('doing')) { ?>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">�����¼</a></li>
<?php } if(helper_access::check_module('blog')) { ?>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">������־</a></li>
<?php } if(helper_access::check_module('feed')) { ?>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">����̬</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">����ͼƬ</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">��������</a></li>
<?php } if(helper_access::check_module('share')) { ?>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<?php } if(helper_access::check_module('group')) { ?>
<li><a href="admin.php?action=threads&amp;operation=group&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Ⱥ������</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;detail=1&amp;operation=group&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Ⱥ������</a></li>
<?php } ?>
</ul>
<?php } } ?>
</div>
</div>
</div>
<script type="text/javascript">
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod');
if(values['type'] == 'add') {
fObj.innerHTML = 'ȡ������';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '����TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
</script><?php } } ?>
</div>
</div>

<?php if(!$_G['setting']['homepagestyle']) { ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php } ?>

<script type="text/javascript">
function fuidgoto(fuid) {
var parameter = fuid != '' ? '&fuid='+fuid : '';
window.location.href = 'home.php?mod=space&do=blog&view=we'+parameter;
}
</script><?php include template('common/footer'); ?>