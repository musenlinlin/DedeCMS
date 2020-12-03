<?php

/**
 * Enter description here...
 *
 * @author Administrator
 * @package defaultPackage
 * @rcsfile 	$RCSfile: story_edit_content_action.php,v $
 * @revision 	$Revision: 1.1 $
 * @date 	$Date: 2009/08/04 04:07:17 $
 */

require_once(dirname(__FILE__)."/config.php");
CheckPurview('story_Edit');
require_once(DEDEINC."/oxwindow.class.php");
require_once(DEDEROOT."/book/include/story.func.php");

if( empty($chapterid)
|| (!empty($addchapter) && !empty($chapternew)) )
{
	if(empty($chapternew))
	{
		 ShowMsg("由于你发布的内容没选择章节，系统拒绝发布！","-1");
		 exit();
	}
	$row = $dsql->GetOne("Select * From #@__story_chapter where bookid='$bookid' order by chapnum desc");
	if(is_array($row)) $nchapnum = $row['chapnum']+1;
	else $nchapnum = 1;
	$query = "INSERT INTO `#@__story_chapter`(`bookid`,`catid`,`chapnum`,`mid`,`chaptername`,`bookname`)
            VALUES ('$bookid', '$catid', '$nchapnum', '0', '$chapternew','$bookname');";
	$rs = $dsql->ExecuteNoneQuery($query);
	if($rs){
		$chapterid = $dsql->GetLastID();
	}
	else
  {
  	ShowMsg("增加章节失败，请检查原因！","-1");
		exit();
  }
}

//获得父栏目
$nrow = $dsql->GetOne("Select * From #@__story_catalog where id='$catid' ");
$bcatid = $nrow['pid'];
$booktype = $nrow['booktype'];

if(empty($bcatid)) $bcatid = 0;
if(empty($booktype)) $booktype = 0;


$addtime = time();

$inQuery = "
   Update `#@__story_content` set `title`='$title',`bookname`='$bookname',
   `chapterid`='$chapterid',`sortid`='$sortid',`body`=''
  where id='$cid'
";

if(!$dsql->ExecuteNoneQuery($inQuery)){
	ShowMsg("更新数据时出错，请检查！".str_repolace("'","`",$dsql->GetError().$inQuery),"-1");
	$dsql->Close();
	exit();
}

WriteBookText($cid,$body);
if(empty($artcontentUrl))$artcontentUrl="";
if($artcontentUrl=="") $artcontentUrl = $cfg_mainsite.$cfg_cmspath."/book/story.php?id={$cid}";

require_once(DEDEROOT."/book/include/story.view.class.php");
$bv = new BookView($bookid,'book');
$artUrl = $bv->MakeHtml();
$bv->Close();

//---------------------------------
//返回成功信息
//----------------------------------
$msg = "
　　请选择你的后续操作：
<a href='story_content_edit.php?cid={$cid}'><u>继续编辑</u></a>
&nbsp;&nbsp;
<a href='$artUrl' target='_blank'><u>预览小说</u></a>
&nbsp;&nbsp;
<a href='$artcontentUrl' target='_blank'><u>预览内容</u></a>
&nbsp;&nbsp;
<a href='story_list_content.php?bookid={$bookid}'><u>本书所有内容</u></a>
&nbsp;&nbsp;
<a href='story_books.php'><u>管理所有图书</u></a>
";

$wintitle = "成功修改文章！";
$wecome_info = "连载管理::发布文章";
$win = new OxWindow();
$win->AddTitle("成功修改文章：");
$win->AddMsgItem($msg);
$winform = $win->GetWindow("hand","&nbsp;",false);
$win->Display();
//ClearAllLink();
?>