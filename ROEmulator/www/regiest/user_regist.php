<?PHP
include('config.php');
require "inc/user_header.inc";
echo "
<TABLE cellSpacing=0 cellPadding=0 width=500 align=center border=0>
	<TR>
		<TD width=400 rowspan='3' vAlign=top>
			<!--���̲���-->";
			$authnum=rand(1000,9999);
			$md5authnum=md5($authnum);
			echo "	
			<center><FORM method='post' action='user_regist_act.php' name='NewAccount'>
				<TABLE cellSpacing=0 cellPadding=0 width=400 align=center border=0>
				<INPUT type='hidden' name='act' value='create'>
				<INPUT type='hidden' name='md5lockx' value='".$md5authnum."'>
				<TR valign=middle align='center'>
				<TD colspan='3'><FONT color=#FF0000>����ʾ��������</FONT></TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD><FONT color=#ff0000>*</FONT></TD>
				<TD><FONT color=#000066>�ˡ����ţ�</FONT></TD>
				<TD><INPUT class=box id='id_N' maxLength=16 size=16 name=id_N> 4-15λ���ڣ�����Ӣ��������</TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD><FONT color=#ff0000>*</FONT></TD>
				<TD><FONT color=#000066>�ܡ����룺</FONT></TD>
				<TD><INPUT class=box id='pwd_P' type=password maxLength=16 size=16 name=pwd_P> 4-16λ���ڣ�����Ӣ��������</TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD><FONT color=#ff0000>*</FONT></TD>
				<TD><FONT color=#000066>ȷ�����룺</FONT></TD>
				<TD><INPUT class=box id='pwd1_P' type=password maxLength=16 size=16 name=pwd1_P> </TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD><FONT color=#ff0000>*</FONT></TD>
				<TD><FONT color=#000066>�ԡ�����</FONT></TD>
				<TD><INPUT type=radio CHECKED value='1' name=sex> �� <INPUT type=radio value='0' name=sex> Ů</TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD><FONT color=#ff0000>*</FONT></TD>
				<TD><FONT color=#000066>�������䣺</FONT></TD>
				<TD><INPUT class=box id='email_E' maxLength=30 size=30 name=email_E> </TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD vAlign=middle><FONT color=#ff0000>*</FONT></TD>
				<TD vAlign=middle><FONT color=#000066>��֤�룺</FONT></TD>
				<TD vAlign=middle><INPUT class=box id='md5lock' maxLength=5 size=5 name=md5lock> <img src='authimg.php?authnum=".$authnum."'></TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD></TD>
				<TD colSpan=2><FONT color=#333333>�� ����ʱ��������д���ĵ������䡣</FONT></TD>
				</TR>
				<TR vAlign=middle align=left>
				<TD colspan='3' align=center><INPUT type=image src='images/btn_yes.gif' width='110' height='50'>&nbsp;&nbsp;&nbsp; <IMG onclick=reset(); src='images/btn_no.gif' width='110' height='50' border='0'></TD>
				</TR>
				<TR><TD height='20'></TD></TR>
				</TABLE>
			</FORM></center>
			<!--���̲���-->
		</TD>
	</TR>
</TABLE>";
require "inc/user_footer.inc";
?>