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
	$TempString2="<META http-equiv=refresh content='5; url=recall.php'>";
}
echo "
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<HTML><HEAD><TITLE>".$config_title." - ���Ŵ���</TITLE>";
require "header.inc";
echo "
<TABLE style='POSITION: relative' cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
<TBODY>
<TR>
<TD width=144 background=images/left_bg.jpg></TD>
<TD bgColor=#c5c5c5>
	<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
	<TBODY>
	<TR>
	<TD>
		<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
		<TBODY>
		<TR>
		<TD width=13><IMG height=12 src='images/table01_01.gif' width=13></TD>
		<TD width='100%' background=images/table01_bg1.gif height=12></TD>
		<TD width=13><IMG height=12 src='images/table01_02.gif' width=13></TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	<TR>
	<TD>
		<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
		<TBODY>
		<TR>
		<TD width=13 background=images/table01_bg2.gif>&nbsp;</TD>
		<TD bgColor=#ffefef>
			<TABLE cellSpacing=0 cellPadding=0 width=694 border=0>
			<TBODY>
			<TR>
			<TD height=94>
				<TABLE cellSpacing=0 cellPadding=0 width=694 border=0>
				<TBODY>
				<TR>
				<TD width=42><IMG height=94 src='images/table03_01.gif' width=42></TD>
				<TD vAlign=top background=images/table03_bg1.gif>
					<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>
					<TBODY>
					<TR>
					<TD width='76%'>
						<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>
						<TBODY>
						<TR>
						<TD height=55>
							<TABLE cellSpacing=0 cellPadding=0 width='84%' align=right border=0>
							<TBODY>
							<TR>
							<TD width=17><IMG height=13 src='images/heart.gif' width=17></TD>
							<TD class=txt><DIV align=center>".$config_game_Vname."</DIV></TD>
							<TD width=17><IMG height=13 src='images/heart.gif' width=17></TD>
							</TR>
							</TBODY>
							</TABLE>
						</TD>
						</TR>
						<TR>
						<TD height=39><IMG height=27 src='images/wz1_recall.gif' width=209></TD>
						</TR>
						</TBODY>
						</TABLE>
					</TD>
					<TD vAlign=top width='22%'><IMG height=52 src='images/heart2.gif' width=64></TD>
					</TR>
					</TBODY>
					</TABLE>
				</TD>
				<TD width=43><IMG height=94 src='images/table03_02.gif' width=43></TD>
				</TR>
				</TBODY>
				</TABLE>
			</TD>
			</TR>	
			<TR>
			<TD height=181>
				<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>
				<TBODY>
				<TR>
				<TD>
					<TABLE cellSpacing=0 cellPadding=0 width=678 align=center border=0>
					<TBODY>
					<TR>
					<TD width=2><IMG height=2 src='images/table04_01.gif' width=2></TD>
					<TD background=images/table04_bg1.gif height=2></TD>
					<TD width=2><IMG height=2 src='images/table04_02.gif' width=2></TD>
					</TR>
					<TR>
					<TD width=2 background=images/table04_bg2.gif></TD>
					<TD bgColor=#ffffff>
<!-- ���̲���_��ʼ -->
				<center>
				<TABLE cellSpacing=0 cellPadding=0 width=400 align=center border=0>
				<TR valign=middle align='center'>
				<TD height=30>&nbsp;</TD>
				</TR>
				<TR>
				<TD height=60><center>".$TempString1."".$TempString2."</center></TD>
				</TR>
				<TR>
				<TD height=30>&nbsp;</TD>
				</TR>
				</TABLE>
				</center>
<!-- ���̲���_���� -->
					</TD>
					<TD width=2 background=images/table04_bg3.gif></TD>
					</TR>
					</TBODY>
					</TABLE>
				</TD>
				</TR>
				<TR>
				<TD>
					<TABLE cellSpacing=0 cellPadding=0 width=678 align=center border=0>
					<TBODY>
					<TR>
					<TD width=2><IMG height=3 src='images/table04_03.gif' width=2></TD>
					<TD width='100%' background=images/table04_bg4.gif height=3></TD>
					<TD width=2><IMG height=3 src='images/table04_04.gif' width=2></TD>
					</TR>
					</TBODY>
					</TABLE>
				</TD>
				</TR>
				</TBODY>
				</TABLE>
			</TD>
			</TR>
			</TBODY>
			</TABLE>
		</TD>
		<TD width=13 background=images/table01_bg3.gif>&nbsp;</TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	<TR>
	<TD>
		<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
		<TBODY>
		<TR>
		<TD width=167><IMG height=49 src='images/table01_03.gif' width=167></TD>
		<TD background=images/table01_bg4.gif>&nbsp;</TD>
		<TD width=13><IMG height=49 src='images/table01_04.gif' width=13></TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	</TBODY>
	</TABLE>
	<TABLE cellSpacing=0 cellPadding=0 width=715 align=center border=0>
	<TBODY>
	<TR>
	<TD vAlign=bottom><IMG height=55 src='images/table02_01.gif' width=76 border=0></TD>
	<TD vAlign=bottom><A href='".$config_bbs_url."' target=_blank><IMG height=55 src='images/table02_02.gif' width=128 border=0></A></TD>
	<TD vAlign=bottom><A href='".$config_bbs_url."' target=_blank><IMG height=55 src='images/table02_03.gif' width=126 border=0></A></TD>
	<TD vAlign=bottom><IMG height=55 src='images/table02_04.jpg' width=231></TD>
	<TD vAlign=bottom><IMG height=74 src='images/table02_05.gif' width=154></TD>
	</TR>
	</TBODY>
	</TABLE>
</TD>
<TD vAlign=top width=144 background=images/right_bg.jpg></TD>
</TR>
</TBODY>
</TABLE>";
require "footer.inc";
?>