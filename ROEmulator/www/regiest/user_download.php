<?PHP
include('config.php');
require "inc/user_header.inc";
echo "
<table cellspacing=0 cellpadding=0 width='500' border='0'>
	<TR>
		<TD height='50' colspan='5'><hr color='#000000'></TD>
	</TR>
	<TR>
		<TD height='20' align='center'>������ƣ�</TD>
		<TD height='20'>&nbsp;<font color='#0000FF'>".$config_cilent_Vname."</font>&nbsp;</TD>
	<TR>
	<TR>
		<TD height='20' align='center'>�����С��</TD>
		<TD height='20'>&nbsp;<font color='#0000FF'>".$config_cilent_size."</font>&nbsp;</TD>
	<TR>
	<TR>
		<TD height='20' align='center'>���ص�ַ��</TD>
		<TD height='20'>
			<a href='".$config_cilent_url1."'>���ص�һ</a>&nbsp;
			<a href='".$config_cilent_url2."'>���ص��</a>&nbsp;
			<a href='".$config_cilent_url3."'>���ص���</a>&nbsp;
			<a href='".$config_cilent_url3."'>���ص���</a>&nbsp;
		</TD>
	<TR>
	<TR>
		<TD height='50' colspan='5'><hr color='#000000'></TD>
	</TR>
</TABLE>
<table cellspacing=0 cellpadding=0 width='500' border='0'>
	<TR>
		<TD height='50' colspan='5'><hr color='#000000'></TD>
	</TR>
	<TR>
		<TD height='20' align='center'>������ƣ�</TD>
		<TD height='20'>&nbsp;<font color='#0000FF'>".$config_patch_Vname."</font>&nbsp;</TD>
	<TR>
	<TR>
		<TD height='20' align='center'>�����С��</TD>
		<TD height='20'>&nbsp;<font color='#0000FF'>".$config_patch_size."</font>&nbsp;</TD>
	<TR>
	<TR>
		<TD height='20' align='center'>���ص�ַ��</TD>
		<TD height='20'>
			<a href='".$config_patch_url1."'>���ص�һ</a>&nbsp;
			<a href='".$config_patch_url2."'>���ص��</a>&nbsp;
			<a href='".$config_patch_url3."'>���ص���</a>&nbsp;
			<a href='".$config_patch_url3."'>���ص���</a>&nbsp;
		</TD>
	<TR>
	<TR>
		<TD height='50' colspan='5'><hr color='#000000'></TD>
	</TR>
</TABLE>";
require "inc/user_footer.inc";
?>
