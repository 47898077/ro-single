<?PHP
include('config.php');
require "inc/user_header.inc";
echo "<table cellspacing=0 cellpadding=0 width='500' border='0'>
	<TR bgcolor='F4F4F4'>
		<TD width='10%' height='20' align='center' class=f_one><B>����</B></TD>
		<TD width='20%' height='20' align='left' class=f_one>&nbsp;&nbsp;<B>��ɫ����</B></TD>
		<TD width='14%' height='20' align='center' class=f_one><B>ְҵ</B></TD>
		<TD width='13%' height='20' align='center' class=f_one><B>BASE LV</B></TD>
		<TD width='13%' height='20' align='center' class=f_one><B>JOB LV</B></TD>
		<TD width='20%' height='20' align='right' class=f_one><B>���ڹ���</B>&nbsp;&nbsp;</TD>
	</TR>";
		$query="select * from `char` where account_id>'$config_list_gmid' order by '$config_list_order' desc limit 0,$config_list_num";
		$result = mysql_query($query);
		$i = "1";$bg = "#f4f4f4";
		while ($r = mysql_fetch_array($result)) {
			if ($bg == "#ffffff") {
				$bg = "#f4f4f4";
			}elseif ($bg == "#f4f4f4") {
				$bg = "#ffffff";
			}
		switch ($r['class']) {
			case 0:$class = "������";break;case 1:$class = "��ʿ";break;case 2:$class = "����";break;
			case 3:$class = "������";break;case 4:$class = "��ʿ";break;case 5:$class = "����";break;
			case 6:$class = "����";break;case 7:$class = "��ʿ";break;case 8:$class = "��ʦ";break;
			case 9:$class = "��ʦ";break;case 10:$class = "����";break;case 11:$class = "����";break;
			case 12:$class = "�̿�";break;case 13:$class = "��ʿ(��)";break;case 14:$class = "ʮ�־�";break;
			case 15:$class = "��ɮ";break;case 16:$class = "����";break;case 17:$class = "��å";break;
			case 18:$class = "������ʿ";break;case 19:$class = "ʫ��";break;case 20:$class = "����";break;
			case 21:$class = "ʮ�־�(��)";break;case 23:$class = "����������";break;case 4001:$class = "���׳�ѧ��";break;
			case 4002:$class = "���׽�ʿ";break;case 4003:$class = "���׷���";break;case 4004:$class = "���׹�����";break;
			case 4005:$class = "���׷�ʿ";break;case 4006:$class = "��������";break;case 4007:$class = "���׵���";break;
			case 4008:$class = "��ʿ����(��)";break;case 4009:$class = "���";break;case 4010:$class = "��ħ��ʿ";break;
			case 4011:$class = "����";break;case 4012:$class = "������";break;case 4013:$class = "ʮ�ִ̿�";break;
			case 4014:$class = "��ʿ����";break;case 4015:$class = "ʥ��ʮ�־�";break;case 4016:$class = "������ʦ";break;
			case 4017:$class = "����";break;case 4018:$class = "����̫��";break;case 4019:$class = "������";break;
			case 4020:$class = "��Ц����";break;case 4021:$class = "�����輧";break;case 4022:$class = "ʥ��ʮ�־�(��)";break;
			case 4023:$class = "�����߱���";break;case 4024:$class = "��ʿ����";break;case 4025:$class = "��ʦ����";break;
			case 4026:$class = "�����ֱ���";break;case 4027:$class = "��ʿ����";break;case 4028:$class = "���˱���";break;
			case 4029:$class = "��������";break;case 4030:$class = "��ʿ����";break;case 4031:$class = "��ʦ����";break;
			case 4032:$class = "��ʦ����";break;case 4033:$class = "��������";break;case 4034:$class = "���˱���";break;
			case 4035:$class = "�̿ͱ���";break;case 4036:$class = "��ʿ����(��)";break;case 4037:$class = "ʮ�־�����";break;
			case 4038:$class = "��ɮ����";break;case 4039:$class = "���߱���";break;case 4040:$class = "��å����";break;
			case 4041:$class = "������ʿ����";break;case 4042:$class = "ʫ�˱���";break;case 4043:$class = "���ﱦ��";break;
			case 4044:$class = "ʮ�־�����(��)";break;case 4045:$class = "���������߱���";break;
		}
		$gid = $r['guild_id'];
		$query2="select * from guild where guild_id = '$gid' limit 1";
		$result2 = mysql_query($query2);
		$r2 = mysql_fetch_array($result2);
		printf("<tr bgcolor=$bg>
		    <TD height='20' align='center' class=f_one>%s</TD>
		    <TD height='20' align='left' class=f_one>&nbsp;&nbsp;%s</TD>
		    <TD height='20' align='center' class=f_one>%s</TD>
		    <TD height='20' align='center' class=f_one>%s</TD>
		    <TD height='20' align='center' class=f_one>%s</TD>
		    <TD height='20' align='center' class=f_one>%s</TD>
		</tr>",$i++,$r['name'],$class,$r['base_level'],$r['job_level'],$r2['name']);}
echo "</TABLE>";
require "inc/user_footer.inc";
?>