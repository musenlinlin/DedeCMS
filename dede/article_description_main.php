<?php 
require_once(dirname(__FILE__)."/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ĵ��Զ�ժҪ���Զ���ҳ</title>
<link href="base.css" rel="stylesheet" type="text/css">
</head>
<body background='img/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#98CAEF" align="center">
  <form action="article_description_action.php" name="form1" target="stafrm">
  <tr> 
    <td height="20" background='img/tbg.gif'> <table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
            <td width="30%" height="18"><strong>�ĵ��Զ�ժҪ���Զ���ҳ��</strong></td>
          <td width="70%" align="right">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
      <td height="33" bgcolor="#FFFFFF">�������������Զ�������ϵͳû����дժҪ���ĵ���ժҪ��Ϣ�����û��ҳ���ĵ����Զ���ҳ��ʶ���ĵ�ʹ�����Զ���ҳ��ή��HTML�����ٶȣ�������û�˹����ŵ�����¿��ܵ��·�ҳ���ݵ�HTML������С��ʹ�ô˹��ܣ���</td>
  </tr>
  <tr> 
    <td height="48" bgcolor="#FFFFFF"><table width="90%" border="0" cellpadding="2" cellspacing="2">
          <tr> 
            <td width="50%">Ƶ��ID�� 
              <input name="channel" type="text" id="channel" value="1" size="10">
              �����ڡ�<a href="mychannel_main.php"><u>Ƶ��ģ�͹���</u></a>������ã�</td>
            <td width="50%">ժҪ��С�� 
              <input name="dsize" type="text" id="dsize" size="15" value="<?php echo $cfg_auot_description?>">
              (���250�ֽ�)</td>
          </tr>
          <tr> 
            <td>���ݱ��� 
              <input name="table" type="text" id="table2" value="<?php echo $cfg_dbprefix?>addonarticle" size="20"></td>
            <td>�����ֶΣ� 
              <input name="field" type="text" id="field2" value="body" size="15"></td>
          </tr>
          <tr> 
            <td>��Сֵ�� 
              <input name="msize" type="text" id="msize2" value="512" size="10">
              ���ֽڣ����ݴ��ڸ�ֵ�ŷ�����</td>
            <td>ÿ�������� 
              <input name="pagesize" type="text" id="pagesize" value="100" size="10">
              ����¼</td>
          </tr>
          <tr> 
            <td>��ʼID�� 
              <input name="sid" type="text" id="sid3" size="8">
              ����ID�� 
              <input name="eid" type="text" id="eid" size="8"></td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td>�١����� 
              <input name="dojob" type="radio" class="np" value="des" checked>
              �Զ�ժҪ�� 
              <input type="radio" name="dojob" class="np" value="page">
              �Զ���ҳ��</td>
            <td>���Զ���ҳ��С�� 
              <?php echo $cfg_arcautosp_size?>
              K��<a href='sys_info.php'><u>�޸�ϵͳ����</u></a>��</td>
          </tr>
        </table></td>
  </tr>
  <tr> 
    <td height="31" bgcolor="#F8FBFB" align="center">
	<input type="submit" name="Submit" value="��ʼִ�з���" class="nbt"> 
    </td>
  </tr>
  </form>
  <tr bgcolor="#E5F9FF"> 
    <td height="20"> <table width="100%">
        <tr> 
          <td width="74%"><strong>�����</strong></td>
          <td width="26%" align="right"> <script language='javascript'>
            	function ResizeDiv(obj,ty)
            	{
            		if(ty=="+") document.all[obj].style.pixelHeight += 50;
            		else if(document.all[obj].style.pixelHeight>80) document.all[obj].style.pixelHeight = document.all[obj].style.pixelHeight - 50;
            	}
            	</script>
            [<a href='#' onClick="ResizeDiv('mdv','+');">����</a>] [<a href='#' onClick="ResizeDiv('mdv','-');">��С</a>] 
          </td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td id="mtd"> <div id='mdv' style='width:100%;height:100;'> 
        <iframe name="stafrm" frameborder="0" id="stafrm" width="100%" height="100%"></iframe>
      </div>
      <script language="JavaScript">
	  document.all.mdv.style.pixelHeight = screen.height - 420;
	  </script> </td>
  </tr>
</table>
</body>
</html>