<?PHP
include('config.php');
if (!empty($_POST['select'])){
		$charname=$_POST['select'];
		$query = "SELECT `last_map` FROM `char` WHERE name='".$charname."';";
		$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
		$data = mysql_fetch_row($result);
	if ($data[0]==$config_not_use){
		$TempString1="<FONT color=#0000FF>����ʧ��</FONT><br>";
		$TempString2="<FONT color=#0000FF>��ֹ���͵ĵ�ͼ</FONT><br>";
	}else{
		$query = "SELECT `char_id`,`save_map`,`save_x`,`save_y` FROM `char` WHERE name='".$charname."';";
		$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
		$data = mysql_fetch_row($result);
		$charid=$data[0];$savemap=$data[1];$savex=$data[2];
		$savey=$data[3];
		if ($_POST['recall']==on){
			$query="UPDATE `char` SET `last_map`='".$savemap."',`last_x`='".$savex."',`last_y`='".$savey."' WHERE `name`='".$charname."';";
			$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
			$TempString1="<br><FONT color=#0000FF>�Ѿ���&nbsp;".$charname."&nbsp;���ش������</FONT>";
		}
		if ($_POST['divest']==on){
			$query="UPDATE `char` SET `head_top`='0',`head_mid`='0',`head_bottom`='0' WHERE `name`='".$charname."';";
			$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
			$query="UPDATE `inventory` SET `equip`=0 WHERE `char_id`='".$charid."';";
			$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
			$TempString2="<br><FONT color=#0000FF>�Ѿ���&nbsp;".$charname."&nbsp;���ϵ�����װ��ж����</FONT>";
		}
	}
} Else {
	$TempString1="<font color='#ff0000'>�������,5��󷵻�.</font>";
	$TempString2="<META http-equiv=refresh content='5; url=user_recall.php'>";
}
require "inc/user_header.inc";
echo "
<TABLE cellSpacing=0 cellPadding=0 width=500 align=center border=0>
	<TR>
		<TD width=400 rowspan='3' vAlign=top>
			<!--���̲���-->
			<center>
				<TABLE cellSpacing=0 cellPadding=0 width=400 align=center border=0>
				<TR valign=middle align='center'>
				<TD height=30>&nbsp;</TD>
				</TR>
				<TR>
				<TD><center>".$TempString1."".$TempString2."<BR><BR><A href='index.php'target='_top'>����</a></center></TD>
				</TR>
				<TR>
				<TD height=30>&nbsp;</TD>
				</TR>
				</TABLE>
			</center>
			<!--���̲���-->
		</TD>
	</TR>
</TABLE>";
require "inc/user_footer.inc";
?>