<?
require_once(dirname(__FILE__)."/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Աע��</title>
<link href="base.css" rel="stylesheet" type="text/css">
<script language='javascript' src='area.js'></script>
<script>
function popUpWindow(URLStr, left, top, width, height)
{
window.open(URLStr, 'popcheckWin', 'toolbar=no,location=no,directories=no,status=no,menub ar=no,scrollbar=no,resizable=no,width='+width+',height='+height+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
function checkSubmit()
{
if(document.form2.userid.value=="")
{
 document.form2.userid.focus();
 alert("�û�������Ϊ�գ�");
 return false;
}
if(document.form2.userpwd.value=="")
{
 document.form2.userpwd.focus();
 alert("��½���벻��Ϊ�գ�");
 return false;
}
if(document.form2.userpwdok.value!=document.form2.userpwd.value)
{
 document.form2.userpwdok.focus();
 alert("�������벻һ�£�");
 return false;
}
if(document.form2.email.value=="")
{
 document.form2.email.focus();
 alert("Email ����Ϊ�գ�");
 return false;
}
if(document.form2.uname.value=="")
{
 document.form2.uname.focus();
 alert("�û��ǳƲ���Ϊ�գ�");
 return false;
}
if(document.form2.vdcode.value=="")
{
 document.form2.vdcode.focus();
 alert("��֤�벻��Ϊ�գ�");
 return false;
}
}
</script>	
</head>
<body leftmargin="0" topmargin="0">
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FFFFFF"> 
<td height="50" colspan="3"><img src="img/reg.gif" width="320" height="46"></td>
</tr>
<tr> 
<td width="17" rowspan="2" bordercolor="#FFFFFF" bgcolor="#808DB5">&nbsp;</td>
<td width="168" bordercolor="#FFFFFF" bgcolor="#808DB5">&nbsp;</td>
<td width="575" align="right"><a href="index.php">��Աϵͳ��ҳ</a> <a href="login.php">��Ա��¼</a></td>
</tr>
<tr> 
<td colspan="2" valign="top"> <table width="100%" height="300" border="0" cellpadding="1" cellspacing="1" bgcolor="#000000">
<tr> 
<td height="194" align="center" valign="top" bgcolor="#FFFFFF"> <table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr> 
                <td colspan="2"><strong>ע����֪��<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;1���ڱ�վע��Ļ�Ա���������ء����������ӹ����������涨���������ڱ�վ�����̰����ˣ��ַ�������˽���ַ�����֪ʶ��Ȩ�������������������ۣ���ҵѶϢ����Ϣ��<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;2���������ڱ�վ���������£���վ���������ձ༭Ȩ�����ұ�������ӡˢ���������������Ȩ�������������ϲ���ȫ�����ǽ���Ȩ�����κ�֪ͨʹ�����ڱ�վ��������Ʒ��</strong></td>
              </tr>
              <form name="form2" action="index_do.php" method="post" onSubmit="return checkSubmit();">
                <input type="hidden" name="fmdo" value="user">
                <input type="hidden" name="dopost" value="regok">
                <tr> 
                  <td height="35" colspan="2"><strong>&nbsp;(��*�ŵı�ʾΪ������Ŀ)</strong></td>
                </tr>
                <tr> 
                  <td width="17%" height="25" align="right">��½�û�����</td>
                  <td width="83%" height="25"> <input name="userid" type="text" id="userid" size="20" style="width:150;height:20">
                    * &nbsp;&nbsp; <a href="#" onClick="popUpWindow('index_do.php?userid=' + form2.userid.value+'&fmdo=user&dopost=checkuser',200,200,300,60);">[����Ƿ��ѱ�ռ��]</a></td>
                </tr>
                <tr> 
                  <td height="25" align="right">��½���룺</td>
                  <td height="25"><input name="userpwd" type="password" id="userpwd" size="18" style="width:150;height:20"> 
                    &nbsp;*&nbsp;ȷ�����룺 
                    <input name="userpwdok" type="password" id="userpwdok" value="" size="18" style="width:150;height:20"> 
                    &nbsp;*</td>
                </tr>
                <tr> 
                  <td height="25" align="right">���Email��</td>
                  <td height="25"><input name="email" type="text" id="email" style="width:150;height:20"> 
                    &nbsp;*</td>
                </tr>
                <tr>
                  <td height="25" align="right">��������ǳƣ�</td>
                  <td height="25">
                  	<input name="uname" type="text" id="uname" size="20" style="width:150;height:20"> 
                    &nbsp;* �Ա� 
                    <input type="radio" name="sex" value="��" checked>��
                    &nbsp; <input type="radio" name="sex" value="Ů">Ů
                   </td>
                </tr>
                <tr> 
                  <td height="25" align="right">��֤�룺</td>
                  <td height="25"><table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="84"><input name="vdcode" type="text" id="vdcode" size="10"></td>
                        <td width="116"><img src='../include/validateimg.php' width='50' height='20'></td>
                      </tr>
                    </table></td>
                </tr>
                <tr> 
                  <td height="25" colspan="2"> <hr width="80%" size="1" noshade> 
                  </td>
                </tr>
                <tr> 
                  <td height="25" align="right">������գ�</td>
                  <td height="25"> <input name="birthday_y" type="text" id="birthday_y" size="6">
                    �� 
                    <input name="birthday_m" type="text" id="birthday_m" size="4">
                    �� 
                    <input name="birthday_d" type="text" id="birthday_d" size="4">
                    �� </td>
                </tr>
                <tr> 
                  <td height="25" align="right">������ͣ�</td>
                  <td height="25"> <select name="weight">
                      <option value='ƽ��' selected>ƽ��</option>
                      <option value='����/��ϸ'>����/��ϸ</option>
                      <option value='��׳'>��׳</option>
                      <option value='����'>����</option>
                      <option value='����'>����</option>
                    </select> &nbsp;���ߣ� 
                    <input name="height" type="text" id="height" size="5">
                    ����</td>
                </tr>
                <tr> 
                  <td height="25" align="right">���ְҵ��</td>
                  <td height="25"><input type="radio" name="job" value="ѧ��">
                    ѧ��&nbsp; <input name="job" type="radio" value="ְԱ" checked>
                    ְԱ 
                    <input type="radio" name="job" value="����">
                    ���� 
                    <input type="radio" name="job" value="ʧҵ��">
                    ʧҵ��</td>
                </tr>
                <tr> 
                  <td height="25" align="right">�����ڵĵ�����</td>
                  <td height="25"> <select name="province" size="1" id="province"width="4" onchange="javascript:selNext(this.document.form2.city,this.value)" style="width:85">
                      <option value="0" selected>--����--</option>
                    </select> <script language='javascript'>
 selTop(this.document.form2.province);
 </script> &nbsp;���У� 
                    <select id="city" name="city" width="4" style="width:85">
                      <option value="0" selected>--����--</option>
                    </select> </td>
                </tr>
                <tr> 
                  <td height="25" align="right">���ҽ��ܣ�</td>
                  <td height="25">[������125������]&nbsp;</td>
                </tr>
                <tr> 
                  <td height="25" align="right">&nbsp;</td>
                  <td height="25"><textarea name="myinfo" cols="40" rows="3" id="myinfo"></textarea></td>
                </tr>
                <tr> 
                  <td height="25" align="right">����ǩ����</td>
                  <td height="25">[����̳��ʹ�ã�������125������] </td>
                </tr>
                <tr> 
                  <td height="25" align="right">&nbsp;</td>
                  <td height="25"><textarea name="mybb" cols="40" rows="3" id="mybb"></textarea></td>
                </tr>
                <tr> 
                  <td height="25" colspan="2"> <hr width="80%" size="1" noshade></td>
                </tr>
                <tr> 
                  <td height="25" align="right">OICQ���룺</td>
                  <td height="25"><input name="oicq" type="text" id="oicq" size="20" style="width:150;height:20"></td>
                </tr>
                <tr> 
                  <td height="25" align="right">��ϵ�绰��</td>
                  <td height="25"><input name="tel" type="text" id="tel" size="20" style="width:150;height:20"> 
                    &nbsp; [��վ��Ա����ϵ�绰һ�ɶ��Ᵽ��]</td>
                </tr>
                <tr> 
                  <td height="25" align="right">������ҳ��</td>
                  <td height="25"><input name="homepage" type="text" id="homepage" size="25"></td>
                </tr>
                <tr> 
                  <td height="67" align="right">&nbsp;</td>
                  <td height="67"> <input type="submit" name="Submit" value=" ȷ��ע�� "> 
                    &nbsp;&nbsp; <input type="reset" name="Submit22" value=" �� �� "></td>
                </tr>
              </form>
            </table></td>
</tr>
</table></td>
</tr>
</table>
<p align='center'>
<?=$cfg_powerby?>
</p>
</body>
</html>